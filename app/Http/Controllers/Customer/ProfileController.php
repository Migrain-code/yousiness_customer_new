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
            'name'=>"Name Nachname",
            'email' => "Telefonnummer",
            'address' => "Adresse",
            'custom_email' => "Email",
            'city_id' => "Plz/ Stadt",
            'gender' => "Geschlecht",
        ]);
        $customer = auth('customer')->user();
        $customer->name = $request->input('name');
        $customer->phone = $request->input('email');
        $customer->birthday = $request->input('birthday');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->custom_email = $request->input('custom_email');
        $customer->district_id = $request->input('city_id');
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
                'message' => "Ihre Benutzerinformationen wurden aktualisiert."
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
            'password' => "Passwort"
        ]);
        $customer = auth('customer')->user();
        $customer->password = Hash::make($request->password);
        if ($customer->save()) {
            return back()->with('response', [
                'status' => "success",
                'message' => "Ihr Profil wurde erfolgreich aktualisiert."
            ]);
        }
    }
}
