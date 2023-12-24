<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Mail\BasicMail;
use App\Models\Customer;
use App\Models\CustomerNotificationPermission;
use App\Models\Email;
use App\Models\Image;
use App\Models\ProjectRequest;
use App\Models\Promoter;
use App\Models\SmsConfirmation;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Services\Sms;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function showRegistrationForm()
    {

        return view('customer.auth.register');
    }

    protected function create(Request $request)
    {
        $request->validate([
            'name' => "required",
            'email' => "required",
        ], [], [
            'name' => "Name und Nachname",
            'email' => "Mobilnummer"
        ]);
        $phone=clearPhone($request->input('email'));

        if ($this->existPhone($phone)) {
            return back()->with('response',[
                'status' => "warning",
                'message' => "Es ist bereits ein Benutzer mit dieser Mobilnummer registriert."
            ]);
        }


        /*$generateCode=rand(100000, 999999);
        $smsConfirmation = new SmsConfirmation();
        $smsConfirmation->phone = $phone;
        $smsConfirmation->action = "CUSTOMER-REGISTER";
        $smsConfirmation->code = $generateCode;
        $smsConfirmation->expire_at = now()->addMinute(3);
        $smsConfirmation->save();*/

        $generatePassword=rand(100000, 999999);
        $customer = Customer::create([
            'name' => $request->input('name'),
            'email' => $phone,
            'phone' => $phone,
            'area_code' => $request->input('country_code'),
            'status'=> 1,
            'password' => Hash::make($generatePassword),
            'password_status'=>1,
            'verify_phone' => 1,
        ]);

        Sms::send($customer->email, "Ihr Passwort für die Anmeldung bei ".config('settings.speed_site_title')." lautet :". $generatePassword);

        return to_route('customer.login')->with('response', [
            'status'=>"success",
            'message' => "Ihre Mobilnummer Überprüfung war erfolgreich. Für die Anmeldung in das System wurde Ihnen Ihr Passwort zugesendet."
        ]);
    }

    public function existPhone($phone)
    {
        $existPhone = \App\Models\Customer::where('email', 'like', '%' . $phone . '%')->first();

        if ($existPhone) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

}
