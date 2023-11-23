<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Mail\BasicMail;
use App\Models\Business;
use App\Models\Customer;
use App\Models\SmsConfirmation;
use App\Providers\RouteServiceProvider;
use App\Services\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VerifyController extends Controller
{
    public function index()
    {
        return view('customer.auth.verify');
    }

    public function phoneVerify()
    {
        return view('customer.auth.phone-verify');
    }

    public function phoneVerifyAction(Request $request)
    {
        //$request->dd();
        $customer=Customer::whereEmail(clearPhone($request->email))->first();
        if ($customer){
            $generateCode=rand(100000, 999999);
            $smsConfirmation = new SmsConfirmation();
            $smsConfirmation->action = "CUSTOMER VERIFY";
            $smsConfirmation->phone = $customer->email;
            $smsConfirmation->code = $generateCode;
            $smsConfirmation->expire_at = now()->addMinute(3);
            $smsConfirmation->save();
            Sms::send(clearPhone($request->phone), "Für die Anmeldung bei ".config('settings.speed_site_title')." lautet Ihr Prüfcode :" . $generateCode);
            return to_route('customer.verify')->with('response', [
                'status'=>"success",
                'message'=>"Ihr Bestätigungscode wurde als Nachricht gesendet",
            ]);
        }
        else{
            return to_route('customer.phone.verify')->with('response', [
                'status'=>"danger",
                'message'=>"Mobilnummer nicht im System registriert."
            ]);
        }
    }

    public function verifyCode(Request $request)
    {

        $request->validate([
            'verification_code' => ['required', 'numeric', 'digits:6'],
        ]);
        $code = SmsConfirmation::where("code", $request->verification_code)->first();
        if ($code){
            if ($code->expire_at < now()){
                return to_route('customer.phone.verify')->with('response', [
                    'status'=>"warning",
                    'message'=>"Verifizierungscode ist nicht mehr gültig."
                ]);
            }
            $user = Customer::where('email', $code->phone)->first();
            $generatePassword=rand(100000, 999999);
            $user->password=Hash::make($generatePassword);
            $user->password_status=1;
            $user->verify_phone=1;
            $user->save();

            Sms::send($user->email, "Ihr Passwort für die Anmeldung bei ".config('settings.speed_site_title')." lautet :". $generatePassword);
            return to_route('customer.login')->with('response', [
                'status'=>"success",
                'message'=>"Ihre Mobilnummer Überprüfung war erfolgreich.Für die Anmeldung in das System wurde Ihnen Ihr Passwort zugesendet."
            ]);
        }
        else{
            return to_route('customer.verify')->with('response', [
                'status'=>"danger",
                'message'=>"Verifizierungscode ist fehlerhaft."
            ]);
        }
    }
    public function showForgotView()
    {
        return view('customer.auth.passwords.confirm');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email'=>"required",
        ], [], [
            'email'=>"Mobile Nummer"
        ]);
        $customer=Customer::whereEmail(clearPhone($request->email))->first();
        if (!$customer){
            return to_route('customer.showForgotView')->with('response', [
               'status'=>"error",
               'message'=>"Diese Telefonnummer ist nicht im System registriert",
            ]);
        }
        else{
            $generatePassword=rand(100000, 999999);
            Sms::send(clearPhone($customer->email), config('settings.speed_site_title') . " Ihr neues Passwort für die Anmeldung am System wurde auf ". $generatePassword." aktualisiert. Wenn Sie Ihr Panel betreten, können Sie Ihr Passwort in ein für Sie geeignetes Passwort ändern.");

            $customer->password=Hash::make($generatePassword);
            $customer->password_status=1;
            $customer->save();
            return to_route('customer.login')->with('response', [
                'status'=>"success",
                'message'=>"Ihr neues Passwort wurde als SMS gesendet. Durch Eingabe des eingehenden Passwortes können Sie das System weiterhin nutzen.",
            ]);

        }
    }

}
