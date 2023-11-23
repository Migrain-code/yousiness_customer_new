<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Resources\Customer;
use App\Models\CustomerNotificationPermission;
use App\Models\Device;
use App\Models\SmsConfirmation;
use App\Services\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

/**
 * @group Authentication
 */
class AuthController extends Controller
{

    /**
     *
     * @header Accept application/json
     * @bodyParam phone string required The phone number of the user.
     * @bodyParam password string required The password of the user.
     *
     *
     */
    public function login(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->input('phone'),
            'password' => $request->input('password'),
        ];
        if (Auth::guard('customer')->attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->accessToken;
            if ($request->has('device_token')){
                $deviceToken = $request->device_token;
                $this->saveDevice($user, $deviceToken);
                $deviceToken = $user->device->token;
                $title = $user->name;
                $body = 'Herzlich willkommen!';
                $notification = new \App\Services\Notification();
                //$response = $notification->sendPushNotification($deviceToken, $title, $body);

            }

            return response()->json([
                'access_token' => $token,
                'customer' => Customer::make($user)
            ]);
        }

        return response()->json(['status' => 'danger', 'message' => "Ihre Mobilnummer oder Ihr Passwort ist falsch. "], 401);
    }

    public function existPhone($phone)
    {
        $existPhone = \App\Models\Customer::where('email', $phone)->first();
        if ($existPhone != null) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    /**
     *
     * @bodyParam name string required The phone number of the user.
     * @bodyParam phone string required The password of the user.
     *
     */
    public function register(CustomerCreateRequest $request)
    {

        if ($this->existPhone(clearPhone($request->phone))) {
            return response()->json([
                'status' => "warning",
                'message' => "Es ist bereits ein Benutzer mit dieser Mobilnummer registriert."
            ]);
        } else {
            $generateCode = rand(100000, 999999);
            $smsConfirmation = new SmsConfirmation();
            $smsConfirmation->phone = $request->input('phone');
            $smsConfirmation->action = "CUSTOMER-REGISTER";
            $smsConfirmation->code = $generateCode;
            $smsConfirmation->expire_at = now()->addMinute(3);
            $smsConfirmation->save();

            $phone = str_replace(array('(', ')', '-', ' '), '', $request->input('phone'));
            Sms::send($phone, "Für die Registrierung bei ".config('settings.site_title')." lautet Ihr Prüfcode:". $generateCode);

            return response()->json([
                'status' => "success",
                'message' => "Wir haben einen Code an Ihre Mobilnummer gesendet. Bitte überprüfen Sie Ihre Mobilnummer. "
            ]);
        }
    }

    /**
     *
     * @bodyParam code string required The phone number of the user.
     *
     */
    public function verifyCode(Request $request)
    {
        $code = SmsConfirmation::where("code", $request->code)->first();
        if ($code) {
            if ($code->expire_at < now()) {
                return response()->json([
                    'status' => "warning",
                    'message' => "Verifizierungscode ist nicht mehr gültig."
                ]);
            }
            else{
                if ($code->phone == $request->phone){
                    $generatePassword = rand(100000, 999999);

                    $customer = \App\Models\Customer::create([
                        'name' => $request->input('name'),
                        'email' => $request->input('phone'),
                        'phone' => $request->input('phone'),
                        'area_code' => $request->input('area_code'),
                        'status' => 1,
                        'password' => Hash::make($generatePassword),
                    ]);
                    $this->addPermission($customer->id);
                    $phone = clearPhone($request->input('phone'));

                    Sms::send($phone, "Ihr Passwort für die Anmeldung bei ".config('settings.speed_site_title')." lautet:". $generatePassword);
                    return response()->json([
                        'status' => "success",
                        'message' => "Ihre Mobilnummer wurde verifiziert. Ihr Passwort für die Anmeldung bei Yousiness wurde an Sie gesendet. ."
                    ]);
                }
                else{
                    return response()->json([
                        'status' => "success",
                        'message' => "Code konnte nicht verifiziert werden."
                    ]);
                }
            }


        } else {
            return response()->json([
                'status' => "danger",
                'message' => "Verifizierungscode ist fehlerhaft. ."
            ]);
        }
    }

    /**
     *
     * @bodyParam phone string required The phone number of the user.
     *
     */
    public function passwordReset(PasswordResetRequest $request)
    {
        $customer = \App\Models\Customer::whereEmail($request->phone)->first();
        if (!$customer) {
            return response()->json([
                'status' => "error",
                'message' => "Diese Telefonnummer ist nicht im System registriert",
            ]);
        } else {
            $generatePassword = rand(100000, 999999);

            $phone = str_replace(array('(', ')', '-', ' '), '', $customer->email);
            Sms::send($phone, config('settings.speed_site_title') . " Ihr neues Passwort für die Anmeldung am System wurde auf ". $generatePassword." aktualisiert. Wenn Sie Ihr Panel betreten, können Sie Ihr Passwort in ein für Sie geeignetes Passwort ändern.");

            $customer->password = Hash::make($generatePassword);
            $customer->password_status = 1;
            $customer->save();
            return response()->json([
                'status' => "success",
                'message' => "Ihr neues Passwort wurde als SMS gesendet. Durch Eingabe des eingehenden Passwortes können Sie das System weiterhin nutzen.",
            ]);

        }
    }

    function saveDevice($user, $deviceToken){
        $device = Device::where('customer_id', $user->id)->first();
        if ($device){
            $device->token = $deviceToken;
            $device->save();
        }
        else{
            $device = new Device();
            $device->customer_id = $user->id;
            $device->token = $deviceToken;
            $device->type = 1;
            $device->save();
        }
    }

    function addPermission($id){
        $customerPermission = new CustomerNotificationPermission();
        $customerPermission->customer_id = $id;
        $customerPermission->save();
        return true;
    }

}
