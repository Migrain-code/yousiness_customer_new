<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentServices;
use App\Models\Business;
use App\Models\BusinessNotification;
use App\Models\BusinessService;
use App\Models\Customer;
use App\Models\CustomerNotificationMobile;
use App\Models\Personel;
use App\Models\ServiceCategory;
use App\Services\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
    public function step1Show($business)
    {

        $business = Business::where('slug', $business)->firstOrFail();

        /*service modal queries */
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
        $ap_services = [];
        $selectedPersonelIds = [];
        $personels = [];
        $remainingDate = [];
        $offDay = [];
        $filledTime = [];
        $remainingDays = Carbon::now()->subDays(1)->diffInDays(Carbon::now()->copy()->endOfMonth());
        $disabledDays = [];
        $appointmentDate = "";
        if (isset(\request()["request"])) {

            if (isset(\request()["request"]["services"])) {
                foreach (\request()["request"]["services"] as $service_id) {
                    $selectedServices[] = BusinessService::find($service_id);
                    $serviceIds[] = $service_id;
                    $ap_services[] = BusinessService::find($service_id);
                }
                if (isset(request()["request"]["appointment_date"])){
                    $appointmentDate = request()["request"]["appointment_date"];
                    if (isset(\request()["request"]["personels"])) {

                        foreach (\request()["request"]["personels"] as $personel_id) {
                            $selectedPersonelIds [] = $personel_id;
                        }
                        foreach ($selectedPersonelIds as $personel_id) {
                            $personels[] = Personel::find($personel_id);
                        }
                    }
                }
            } else {
                return to_route('business.detail', $business->slug);
            }


        } else {
            return to_route('business.detail', $business->slug);
        }

        /*end modal queries*/

        return view('appointment.step1', compact('business', 'appointmentDate','personels', 'remainingDate', 'disabledDays', 'selectedPersonelIds', 'manServiceCategories', 'womanServiceCategories', 'womanCategories', 'manCategories', 'selectedServices', 'serviceIds', 'ap_services'));
    }

    public function step1Store(Request $request)
    {
        return to_route('step1.show', ['business' => session('appointment')["businessSlug"], 'request' => $request->all()]);
    }

    public function appointmentCreate(Request $request)
    {
        $business = Business::find($request->business_id);
        if (Auth::guard('customer')->check()) {
            $appointment = new Appointment();
            $appointment->business_id = $business->id;
            $appointment->customer_id = Auth::guard('customer')->id();

        } else {
            $request->validate([
                'name' => "required",
                'surname' => "required",
                'phone' => "required",
            ], [], [
                'name' => 'Name',
                'surname' => 'Nach Name',
                'phone' => 'Mobilnummer',
            ]);
            $appointment = new Appointment();
            $appointment->business_id = $business->id;
            $customer = new Customer();
            $customer->name = $request->input('name'). " ". $request->input('surname');
            $customer->phone = $request->input('phone');
            $customer->email = null;
            $customer->image = "admin/users.svg";
            $customer->password = Hash::make('123456');
            $customer->save();
            $appointment->customer_id = $customer->id;
        }

        if ($business->approve_type == 0) {
            $appointment->status = 1;
        } else {
            $appointment->status = 0;
        }
        $appointment->save();

        $loop = 0;

        $appointment->date = Carbon::parse($request->input('appointment_date'));
        //dd($request->all());
        foreach ($request->services as $service) {
            $appointmentService = new AppointmentServices();
            $appointmentService->appointment_id = $appointment->id;
            $appointmentService->personel_id = $request->personels[$loop];
            $appointmentService->service_id = $service;
            $findService = BusinessService::find($service);
            $appointmentService->start_time = Carbon::parse($request->times[$loop])->format('d.m.Y H:i');
            $appointmentService->end_time = Carbon::parse($request->times[$loop])->addMinute($findService->time)->format('d.m.Y H:i');
            $appointmentService->save();
            $loop++;
        }
        $uniqueArray = array_unique($request->personels);

        foreach ($uniqueArray as $uniquePersonel) {
            foreach ($request->personels as $key => $personel) {
                if ($uniquePersonel == $personel) {
                    $appointmentService = new AppointmentServices();
                    $appointmentService->appointment_id = $appointment->id;
                    $appointmentService->personel_id = $personel;
                    $appointmentService->service_id = $request->services[$key];
                    $findService = BusinessService::find($request->services[$key]);
                    $appointmentService->start_time = $request->times[$key];
                    $appointmentService->end_time = Carbon::parse($request->times[$key])->addMinute($findService->time)->format('d.m.Y H:i');
                    $appointmentService->save();
                }
            }
        }
        $appointment->save();
        $notification = new BusinessNotification();
        $notification->business_id = $business->id;
        $notification->title = $appointment->customer->name . " hat einen Termin in Ihrem Salon vereinbart";
        $notification->message =  $appointment->customer->name." hat für den ".$appointment->services->first()->start_time." Uhr einen Termin in Ihrem Salon vereinbart.";
        $notification->link = Str::slug($notification->title);
        $notification->save();

        $title = "Ihr Termin wurde erstellt";
        $body = 'Ihr Termin wurde am '. $appointment->services->first()->start_time .' für '.$business->name.' erfolgreich abgeschlossen.';

        if (auth('customer')->check() && \auth('customer')->user()->device){
            $deviceToken = \auth('customer')->user()->device->token;
            $notification = new \App\Services\Notification();
            $notification->sendPushNotification($deviceToken, $title, $body);
        } else{
            $notificationCustomer = new CustomerNotificationMobile();
            $notificationCustomer->title = $title;
            $notificationCustomer->content = $body;
            $notificationCustomer->customer_id = $appointment->customer_id;
            $notificationCustomer->save();
        }

        return to_route('appointment.success', $appointment->id);
    }

    public function step5Show($appointment)
    {
        $appointment = Appointment::find($appointment);
        $business = $appointment->business;
        $customer = $appointment->customer;
        $customer->sendSms("Ihr Termin wurde am ".$appointment->services->first()->start_time." für ".$business->name." erfolgreich abgeschlossen.");
        return view('appointment.step5', compact('appointment', 'business'));
    }

    public function findTimes($business)
    {
        $disableds = [];
        foreach ($business->appointments()->whereNotIn('status', [8])->get() as $appointment) {
            $startDateTime = Carbon::parse($appointment->start_time);
            $endDateTime = Carbon::parse($appointment->end_time);

            $currentDateTime = $startDateTime->copy();
            while ($currentDateTime <= $endDateTime) {
                $disableds[] = $currentDateTime->format('d.m.Y H:i');
                $currentDateTime->addMinutes($business->appoinment_range);
            }
        }

        return $disableds;
    }

    public function appointmentTimeControl(Request $request)
    {
        $business = Business::find($request->business_id);
        $filledTime = $this->findTimes($business);

        if (in_array($request->time, $filledTime)) {
            return response()->json([
                'title' => "Hata",
                'icon' => "error",
                'message' => "Seçtiğiniz Tarih ve saatte randevu kaydı yapıldı. Sistem üzerinde ayarlama yapmaya devam ederseniz kalıcı olarak engelleneceksiniz."
            ]);
        }

    }
}
