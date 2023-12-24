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
            'name' => "required",
            'email' => "required",
            'address' => "required",
            'custom_email' => "required",
            'city_id' => "required",
            'gender' => "required",
        ], [], [
            'name' => "Name Nachname",
            'email' => "Telefonnummer",
            'address' => "Adresse",
            'custom_email' => "Email",
            'city_id' => "Plz/ Stadt",
            'gender' => "Geschlecht",
        ]);
        $phone = clearPhone($request->input('email'));

        $customer = auth('customer')->user();

        if ($phone != $customer->email) {
            if ($this->existPhone($phone)) {
                return back()->with('response', [
                    'status' => "warning",
                    'message' => "Es ist bereits ein Benutzer mit dieser Mobilnummer registriert."
                ]);
            }
        }
        $customer->name = $request->input('name');
        $customer->phone = $phone;
        $customer->birthday = $request->input('birthday');
        $customer->email = $phone;
        $customer->address = $request->input('address');
        $customer->custom_email = $request->input('custom_email');
        $customer->district_id = $request->input('city_id');
        $customer->gender = $request->input('gender');
        $customer->area_code = $request->input('country_code');

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

    public function existPhone($phone)
    {
        if (strlen($phone) == 11 || substr($phone, 0, 1) == 0) {
            $phone = ltrim($phone, '0');
        }
        $existPhone = \App\Models\Customer::where('email', 'like', '%' . $phone . '%')->first();

        if ($existPhone) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
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
