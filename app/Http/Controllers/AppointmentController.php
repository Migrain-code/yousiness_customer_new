<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentServices;
use App\Models\Business;
use App\Models\BusinessService;
use App\Models\Customer;
use App\Models\Personel;
use App\Models\ServiceCategory;
use App\Services\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AppointmentController extends Controller
{
    public function step1Show($business, $service)
    {
        $business = Business::where('slug', $business)->firstOrFail();
        $service = BusinessService::find($service);

        $womanServices = $business->services()->where('type', 1)->get();
        $manServices = $business->services()->where('type', 2)->get();
        $womanServiceCategories = $womanServices->groupBy('category');
        $manServiceCategories = $manServices->groupBy('category');
        $manCategories = [];
        $womanCategories = [];
        foreach ($manServiceCategories as $key => $value) {
            $manCategories[] = ServiceCategory::find($key);
        }
        foreach ($womanServiceCategories as $key => $value) {
            $womanCategories[] = ServiceCategory::find($key);
        }
        $array = ['businessName' => $business->name, 'businessSlug' => $business->slug];
        session()->put('appointment', $array);
        $selectedServices = [];
        $serviceIds = [];

        $selectedServices[] = $service;
        $serviceIds[] = $service->id;

        return view('appointment.step1', compact('business', 'manServiceCategories', 'womanServiceCategories', 'womanCategories', 'manCategories', 'selectedServices', 'serviceIds'));
    }

    public function step1Store(Request $request)
    {

        $sessionArray = session('appointment');
        $serviceArray = $request->service_ids;
        $mergeArray = array_merge($sessionArray, array("appointment_services" => $serviceArray));

        session()->put('appointment', $mergeArray);
        return to_route('step2.show', session('appointment')['businessSlug']);
    }

    public function step2Show($business)
    {
        $business = Business::where('slug', $business)->firstOrFail();
        $ap_services = [];

        foreach (session('appointment')['appointment_services'] as $service) {
            $ap_services[] = BusinessService::find($service);
        }

        return view('appointment.step2', compact('ap_services'));
    }

    public function step2Store(Request $request)
    {
        $sessionArray = session('appointment');
        $personelArray = $request->personels;
        $mergeArray = array_merge($sessionArray, array("personels" => $personelArray));
        session()->put('appointment', $mergeArray);
        return to_route('step3.show', session('appointment')['businessSlug']);
    }

    public function findTimes($business)
    {
        $times = [];

        foreach ($business->appointments()->whereNotIn('status', [8])->get() as $appointment) {
            foreach ($appointment->services as $service) {
                $times[] = [Carbon::parse($service->start_time)];
            }
        }
        return $times;
    }

    public function step3Show()
    {
        $business = Business::where('slug', session('appointment')['businessSlug'])->firstOrFail();
        $personels = [];
        foreach (session('appointment')['personels'] as $personel_id) {
            $personels[] = Personel::find($personel_id);
        }
        $ap_services = [];
        foreach (session('appointment')['appointment_services'] as $service) {
            $ap_services[] = BusinessService::find($service);
        }
        $remainingDate = [];
        $offDay = [];
        $filledTime = [];
        $remainingDays = Carbon::now()->diffInDays(Carbon::now()->copy()->endOfMonth());

        for ($i = 0; $i < $remainingDays; $i++) {
            $days = Carbon::now()->addDays($i);
            if ($days < Carbon::now()->endOfMonth()) {
                $remainingDate[] = $days;
            }
        }
        $filledTime = $this->findTimes($business);
        $disabledDays = [];
        foreach ($filledTime as $time) {
            $disabledDays[] = $time[0]->format('d.m.Y H:i');
        }

        return view('appointment.step3', compact('personels', 'ap_services', 'remainingDate', 'business', 'disabledDays'));
    }

    public function personelTimeControl(Request $request)
    {

        //dd();
        $status = 0;
        $formattedTime = Carbon::parse($request->time)->format('H:i');
        foreach (session('appointment')['personels'] as $personel_id) {
            $personal = Personel::find($personel_id);
            if ($formattedTime > Carbon::parse($personal->end_time)->format('H:i')) {
                return response()->json([
                    'title'=>"Hata",
                    'icon' => "error",
                    'message' => $personal->name . " İsimli Personelin Mesai Saatleri Dışında Bir Saat Seçtiniz. İsterseniz Bir gün sonrasına randevu alabilirsiniz."
                ]);
            }
        }
    }

    public function step3Store(Request $request)
    {
        $request->validate([
           'appointment_time' => 'required',

        ], [], [
            'appointment_time'=>'Randevu tarihi ve saati'
        ]);
        $sessionArray = session('appointment');

        $mergeArray = array_merge($sessionArray, array("appointment_date" => $request->appointment_time));
        session()->put('appointment', $mergeArray);

        if (Auth::guard('customer')->check()) {
            return to_route('step4.no_post');
        } else {
            return to_route('step4.show', session('appointment')['businessSlug']);
        }
    }

    public function step4StoreNoPost()
    {
        $sessionArray = session('appointment');
        $business = Business::where('slug', session('appointment')['businessSlug'])->firstOrFail();
        $appointment = new Appointment();
        $appointment->business_id = $business->id;
        $customer = Auth::guard('customer')->user();
        $appointment->customer_id = $customer->id;
        if ($business->approve_type == 1) {
            $appointment->status = 1;
        } else {
            $appointment->status = 0;
        }
        $appointment->save();
        $loop = 0;
        $clock = Carbon::parse($sessionArray['appointment_date']);
        $sumTime = 0;
        foreach ($sessionArray['appointment_services'] as $service) {
            $appointmentService = new AppointmentServices();
            $appointmentService->appointment_id = $appointment->id;
            $appointmentService->personel_id = $sessionArray['personels'][$loop];
            $appointmentService->service_id = $service;
            $findService = BusinessService::find($service);

            $appointmentService->start_time = $clock->format('d.m.Y H:i');
            $appointmentService->end_time = $clock->addMinute($findService->time)->format('d.m.Y H:i');
            $sumTime += $findService->time;
            $appointmentService->save();
            $loop++;
        }
        $appointment->start_time = Carbon::parse($sessionArray['appointment_date'])->format('d.m.Y H:i');
        $appointment->end_time = Carbon::parse($sessionArray['appointment_date'])->addMinute($sumTime)->format('d.m.Y H:i');
        $appointment->save();

        $mergeArray = array_merge(session('appointment'), array("appointment_detail" => $appointment));
        session()->put('appointment', $mergeArray);
        return to_route('step5.show');
    }

    public function step4Show()
    {
        $business = Business::where('slug', session('appointment')['businessSlug'])->firstOrFail();
        $personels = [];
        foreach (session('appointment')['personels'] as $personel_id) {
            $personels[] = Personel::find($personel_id);
        }
        $ap_services = [];
        foreach (session('appointment')['appointment_services'] as $service) {
            $ap_services[] = BusinessService::find($service);
        }

        return view('appointment.step4', compact('personels', 'ap_services', 'business'));
    }

    public function step4Store(Request $request)
    {
        $request->validate([
            'name' => "required",
            'surname' => "required",
        ], [], [
            'name' => 'Ad',
            'surname' => 'Soyad',
            'phone' => 'Telefon',
        ]);
        $sessionArray = session('appointment');
        $business = Business::where('slug', session('appointment')['businessSlug'])->firstOrFail();
        //dd($business);
        $appointment = new Appointment();
        $appointment->business_id = $business->id;
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->email = null;
        $customer->image = "admin/users.svg";
        $customer->password = Hash::make('123456');
        $customer->save();

        $appointment->customer_id = $customer->id;
        if ($business->approve_type == 1) {
            $appointment->status = 1;
        } else {
            $appointment->status = 0;
        }
        $appointment->save();
        $loop = 0;
        $clock = Carbon::parse($sessionArray['appointment_date']);
        $sumTime = 0;
        foreach ($sessionArray['appointment_services'] as $service) {
            $appointmentService = new AppointmentServices();
            $appointmentService->appointment_id = $appointment->id;
            $appointmentService->personel_id = $sessionArray['personels'][$loop];
            $appointmentService->service_id = $service;
            $findService = BusinessService::find($service);

            $appointmentService->start_time = $clock->format('d.m.Y H:i');
            $appointmentService->end_time = $clock->addMinute($findService->time)->format('d.m.Y H:i');
            $sumTime += $findService->time;
            $appointmentService->save();
            $loop++;
        }
        $appointment->start_time = Carbon::parse($sessionArray['appointment_date'])->format('d.m.Y H:i');
        $appointment->end_time = Carbon::parse($sessionArray['appointment_date'])->addMinute($sumTime)->format('d.m.Y H:i');
        $appointment->save();

        $mergeArray = array_merge(session('appointment'), array("appointment_detail" => $appointment));
        session()->put('appointment', $mergeArray);
        return to_route('step5.show');
    }

    public function step5Show()
    {
        $appointment = session('appointment')['appointment_detail'];
        $business = $appointment->business;
        $customer = $appointment->customer;
        $customer->sendSms($business->name . ' İşletmesine ' . $appointment->start_time . ' - ' . $appointment->end_time . ' arasında randevunuz alındı.');
        return view('appointment.step5', compact('appointment', 'business'));
    }
}
