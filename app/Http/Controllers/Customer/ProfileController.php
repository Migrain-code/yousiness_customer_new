<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $customer=auth('customer')->user();
        $customer->name=$request->input('name');
        $customer->phone=$request->input('email');
        $customer->birthday=$request->input('birthday');
        $customer->email=$request->input('email');
        $customer->city_id=$request->input('city_id');
        $customer->district_id=$request->input('district_id');
        if ($request->hasFile('profile')){
            $customer->image='storage/'.$request->file('profile')->store('customer_profiles');
            $customer->image= asset($customer->image);
        }
        if ($customer->save()){
            return back()->with('response', [
                'status'=>"success",
                'message'=>"Bilgileriniz Güncellendi"
            ]);
        }
    }

    public function editPassword()
    {
        return view('customer.profile.change-password');
    }
    public function edit()
    {
        $customer=auth('customer')->user();
        return view('customer.profile.setting', compact('customer'));
    }
    public function changePassword(Request $request)
    {
        $request->validate([
           'password'=>"required|confirmed",
        ],[],[
            'password'=>"Şifre"
        ]);
        $customer=auth('customer')->user();
        $customer->password=Hash::make($request->password);
        if ($customer->save()){
            return back()->with('response', [
                'status'=>"success",
                'message'=>"Şifreniz Güncellendi"
            ]);
        }
    }
}
