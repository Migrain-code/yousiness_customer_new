<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Resources\Customer;
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
                $title = 'Merhaba '. $user->name;
                $body = 'HizliRandevuya Tekrar Giriş Yaptın';
                $notification = new \App\Services\Notification();
                $response = $notification->sendPushNotification($deviceToken, $title, $body);
            }

            return response()->json([
                'access_token' => $token,
                'customer' => Customer::make($user)
            ]);
        }

        return response()->json(['status' => 'danger', 'message' => "Telefon Numaranız veya Şifreniz Hatalı"], 401);
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

        if ($this->existPhone($request->phone)) {
            return response()->json([
                'status' => "warning",
                'message' => "Bu telefon numarası ile kayıtlı kullanıcı bulunmakta."
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
            Sms::send($phone, config('settings.site_title') . "Sistemine kayıt için, telefon numarası doğrulama kodunuz " . $generateCode);

            \App\Models\Customer::create([
                'name' => $request->input('name'),
                'email' => $request->input('phone'),
                'phone' => $request->input('phone'),
                'status' => 1,
                'password' => Hash::make(Str::random(8)),
            ]);
            return response()->json([
                'status' => "success",
                'message' => "Kayıt Oluşturuldu.Lütfen Telefon Numaranızı Doğrulayınız"
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
                    'message' => "Doğrulama Kodunun Süresi Dolmuş."
                ]);
            }
            $user = \App\Models\Customer::where('email', $code->phone)->first();
            $generatePassword = rand(100000, 999999);
            $user->password = Hash::make($generatePassword);
            $user->password_status = 1;
            $user->verify_phone = 1;
            $user->save();

            $phone = str_replace(array('(', ')', '-', ' '), '', $user->email);
            Sms::send($phone, config('settings.site_title') . "Sistemine giriş için şifreniz " . $generatePassword);
            return response()->json([
                'status' => "success",
                'message' => "Telefon Numaranız doğrulandı. Sisteme giriş için şifreniz gönderildi."
            ]);
        } else {
            return response()->json([
                'status' => "danger",
                'message' => "Doğrulama Kodu Hatalı."
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
                'message' => "Bu telefon numarası sistemde kayıtlı değil",
            ]);
        } else {
            $generatePassword = rand(1000000, 9999999);

            $phone = str_replace(array('(', ')', '-', ' '), '', $customer->email);
            Sms::send($phone, config('settings.site_title') . " Sistemine giriş için yeni şifreniz " . $generatePassword . " olarak güncellendi. Panelinize girerek şifrenizi size uygun bir şifre ile değiştirebilirsiniz.");

            $customer->password = Hash::make($generatePassword);
            $customer->password_status = 1;
            $customer->save();
            return response()->json([
                'status' => "success",
                'message' => "Yeni şifreniz sms olarak gönderildi. Gelen şifreyi girerek sistemi kullanmaya devam edebilirsiniz",
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
}
