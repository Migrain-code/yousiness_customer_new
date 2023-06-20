<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Resources\Customer;
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
            return response()->json(['access_token' => $token]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     *
     * @bodyParam name string required The phone number of the user.
     * @bodyParam birthday date required The birthday of the user. Format (Y-m-d).
     * @bodyParam phone string required The password of the user.
     *
     */
    public function register(CustomerCreateRequest $request)
    {
        $generateCode=rand(100000, 999999);
        $phone=str_replace(array('(', ')', '-', ' '), '', $request->phone);
        Sms::send($phone,config('settings.site_title'). "Sistemine giriş için, telefon numarası doğrulama kodunuz ". $generateCode);

        return \App\Models\Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('phone'),
            'phone' => $request->input('phone'),
            'status'=>1,
            'birthday'=> $request->input('birthday'),
            'password' => Hash::make(Str::random(8)),
            'verification_code'=>$generateCode
        ]);
    }
    /**
     *
     * @bodyParam phone string required The phone number of the user.
     *
     */
    public function passwordReset(PasswordResetRequest $request)
    {
        $customer= \App\Models\Customer::whereEmail($request->phone)->first();
        if (!$customer){
            return response()->json([
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
            return response()->json([
                'status'=>"success",
                'message'=>"Yeni şifreniz sms olarak gönderildi. Gelen şifreyi girerek sistemi kullanmaya devam edebilirsiniz",
            ]);

        }
    }
}
