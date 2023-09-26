<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'name'=>"required",
            'email' => "required",
            'address' => "required",
            'custom_email' => "required",
            'city_id' => "required",
            'gender' => "required",
        ], [], [
            'name'=>"Vorname Familienname",
            'email' => "Telefonnummer",
            'address' => "Adresse",
            'custom_email' => "Email",
            'city_id' => "Plz/ Stadtname",
            'gender' => "Geschlecht",
        ]);
        $customer = auth('customer')->user();
        $customer->name = $request->input('name');
        $customer->phone = $request->input('email');
        $customer->birthday = $request->input('birthday');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->custom_email = $request->input('custom_email');
        $customer->city_id = $request->input('city_id');
        $customer->gender = $request->input('gender');
        if ($customer->gender == 1 and  $customer->image == "default/user.png"){
            $customer->image = "default/woman.png";
        }
        else{
            if ($customer->gender == 2 and  $customer->image == "default/woman.png"){
                $customer->image = "default/user.png";
            }
        }
        if ($request->hasFile('profile')) {
            $customer->image = $request->file('profile')->store('customer_profiles');
        }
        if ($customer->save()) {
            return back()->with('response', [
                'status' => "success",
                'message' => "Bilgileriniz Güncellendi"
            ]);
        }
    }

    public function editPassword()
    {
        return view('customer.profile.change-password');
    }

    public function edit()
    {
        $customer = auth('customer')->user();
        return view('customer.profile.setting', compact('customer'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => "required|confirmed",
        ], [], [
            'password' => "Şifre"
        ]);
        $customer = auth('customer')->user();
        $customer->password = Hash::make($request->password);
        if ($customer->save()) {
            return back()->with('response', [
                'status' => "success",
                'message' => "Şifreniz Güncellendi"
            ]);
        }
    }
}
