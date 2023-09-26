<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected string $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('customer.auth.login');
    }

    public function guard()
    {
        return Auth::guard('customer');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');

        $user = Customer::where('email', clearPhone($email))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::loginUsingId($user->id);
            return to_route('customer.home');
        } else {
            return to_route('customer.login')->with('response', [
                'status' => "danger",
                'message' => "Telefonnummer oder Passwort sind falsch"
            ]);
        }
    }
}
