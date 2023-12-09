<?php

namespace App\Http\Middleware;

use App\Models\Customer;
use App\Models\SmsConfirmation;
use App\Services\Sms;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth('customer')->check() && auth('customer')->user()->verify_phone != 1) {
            $this->createVerifyCode(auth('customer')->user());
            Auth::guard('customer')->logout();
            return to_route('customer.verify')->with('response', [
                'status'=>"danger",
                'message'=>"Sie können sich nicht im System anmelden, ohne Ihre Mobilnummer zu bestätigen",
            ]);

        }
        return $next($request);
    }
    function createVerifyCode($customer){
        if ($customer){
            $generateCode=rand(100000, 999999);
            $smsConfirmation = new SmsConfirmation();
            $smsConfirmation->action = "CUSTOMER-VERIFY";
            $smsConfirmation->phone = $customer->email;
            $smsConfirmation->code = $generateCode;
            $smsConfirmation->expire_at = now()->addMinute(3);
            $smsConfirmation->save();
            Sms::send(clearPhone($customer->email), "Für die Anmeldung bei ".config('settings.speed_site_title')." lautet Ihr Prüfcode:" . $generateCode);
        }

    }

}
