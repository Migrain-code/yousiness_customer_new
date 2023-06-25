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
        $customer=Customer::where('email', $request->phone)->first();
        if ($customer){
            $generateCode=rand(100000, 999999);
            $smsConfirmation = new SmsConfirmation();
            $smsConfirmation->action = "CUSTOMER VERIFY";
            $smsConfirmation->phone = $customer->email;
            $smsConfirmation->code = $generateCode;
            $smsConfirmation->expire_at = now()->addMinute(3);
            $smsConfirmation->save();
            $phone=str_replace(array('(', ')', '-', ' '), '', $request->phone);
            Sms::send($phone,config('settings.site_title'). " Sistemine giriş için, telefon numarası doğrulama kodunuz ". $generateCode);
            return to_route('customer.verify')->with('response', [
                'status'=>"success",
                'message'=>"Doğrulama Kodunuz telefonunuza mesaj olarak gönderildi",
            ]);
        }
        else{
            return to_route('customer.phone.verify')->with('response', [
                'status'=>"danger",
                'message'=>"Telefon Numarası Sistemde Kayıtlı Değil"
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
                    'message'=>"Doğrulama Kodunun Süresi Dolmuş."
                ]);
            }
            $user = Customer::where('email', $code->phone)->first();
            $generatePassword=rand(100000, 999999);
            $user->password=Hash::make($generatePassword);
            $user->password_status=1;
            $user->verify_phone=1;
            $user->save();

            $phone=str_replace(array('(', ')', '-', ' '), '', $user->email);
            Sms::send($phone,config('settings.site_title'). "Sistemine giriş için şifreniz ".$generatePassword);
            return to_route('customer.login')->with('response', [
                'status'=>"success",
                'message'=>"Telefon Numaranız doğrulandı. Sisteme giriş için şifreniz gönderildi."
            ]);
        }
        else{
            return to_route('customer.verify')->with('response', [
                'status'=>"danger",
                'message'=>"Doğrulama Kodu Hatalı."
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
            'email'=>"Telefon Numarası"
        ]);
        $customer=Customer::whereEmail($request->email)->first();
        if (!$customer){
            return to_route('business.showForgotView')->with('response', [
               'status'=>"error",
               'message'=>"Bu telefon numarası sistemde kayıtlı değil",
            ]);
        }
        else{
            $generatePassword=rand(1000000, 9999999);

            $phone=str_replace(array('(', ')', '-', ' '), '', $customer->email);
            Sms::send($phone,config('settings.site_title'). " Sistemine giriş için yeni şifreniz ".$generatePassword." olarak güncellendi. Panelinize girerek şifrenizi size uygun bir şifre ile değiştirebilirsiniz.");

            $customer->password=Hash::make($generatePassword);
            $customer->password_status=1;
            $customer->save();
            return to_route('customer.login')->with('response', [
                'status'=>"success",
                'message'=>"Yeni şifreniz sms olarak gönderildi. Gelen şifreyi girerek sistemi kullanmaya devam edebilirsiniz",
            ]);

        }
    }

}
