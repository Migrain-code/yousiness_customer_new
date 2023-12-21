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
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer');
    }

    public function showRegistrationForm()
    {

        return view('customer.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data["email"] = clearPhone($data["email"]);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:customers'],
        ], [], [
            'name' => 'Name Nachname',
            'email' => 'Mobilnummer',
            'password' => 'Password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model|Customer
     */
    protected function create(array $data)
    {

        $generateCode=rand(100000, 999999);
        $smsConfirmation = new SmsConfirmation();
        $smsConfirmation->phone = $data['email'];
        $smsConfirmation->action = "CUSTOMER-REGISTER";
        $smsConfirmation->code = $generateCode;
        $smsConfirmation->expire_at = now()->addMinute(3);
        $smsConfirmation->save();

        $phone=clearPhone($data["email"]);

        $customer = Customer::create([
            'name' => $data['name'],
            'email' => $phone,
            'phone' => $phone,
            'area_code' => $data['country_code'],
            'status'=> 1,
            'password' => Hash::make(Str::random(8)),
        ]);
        $customerPermission = new CustomerNotificationPermission();
        $customerPermission->customer_id = $customer->id;
        $customerPermission->save();

        return $customer;
    }
    protected function registered(Request $request, $user)
    {
        return to_route('customer.verify');
    }
}
