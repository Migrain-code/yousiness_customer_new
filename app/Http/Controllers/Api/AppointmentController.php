<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentPersonelResource;
use App\Http\Resources\PersonelResource;
use App\Http\Resources\ServiceResource;
use App\Models\Appointment;
use App\Models\AppointmentServices;
use App\Models\Business;
use App\Models\BusinessService;
use App\Models\Customer;
use App\Models\Personel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AppointmentController extends Controller
{
    /**
     * POST /api/appointment/business/get
     *
     * Bu işletmenin hizmetlerini döndürecek
     * <ul>
     * <li>business_id  istenirse gönderilebilir </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function businessGet(Request $request)
    {
        $business = Business::find($request->id);
        if ($business) {
            /* Woman Services */
            $womanServices = $business->services()->where('type', 1)->with('categorys')->get();
            $womanServiceCategories = $womanServices->groupBy('categorys.name');

            $transformedDataWoman = [];
            foreach ($womanServiceCategories as $category => $services) {

                $transformedServices = [];
                foreach ($services as $service) {
                    $transformedServices[] = [
                        'id' => $service->id,
                        'name' => $service->subCategory->name,
                        'price' => $service->price,
                    ];
                }
                $transformedDataWoman[] = [
                    'id' => $services->first()->category,
                    'title' => $category,
                    'detail' => $transformedServices,
                ];
            }

            /* Man Services */
            $transformedDataMan = [];
            $manServices = $business->services()->where('type', 2)->get();
            $manServiceCategories = $manServices->groupBy('categorys.name');
            foreach ($manServiceCategories as $category => $services) {
                $transformedServices = [];
                foreach ($services as $service) {
                    $transformedServices[] = [
                        'id' => $service->id,
                        'name' => $service->subCategory->name,
                        'price' => $service->price,
                    ];
                }
                $transformedDataMan[] = [
                    'id' => $services->first()->category,
                    'title' => $category,
                    'detail' => $transformedServices,
                ];
            }

            return response()->json([
                'womanServices' => $transformedDataWoman,
                'manServices' => $transformedDataMan,
            ]);
        } else {
            return response()->json([
                'status' => 'danger',
                'message' => 'İşletme Kaydı Bulunamadı',
            ]);
        }
    }
    /**
     * POST /api/appointment/personal/get
     *
     * Bu hizmetlerin personellerini döndürecek
     * <ul>
     * <li>serviceIds  gönderilecek </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */

    public function personalGet(Request $request)
    {
        $getData = $request->serviceIds;
        $ap_services = [];
        foreach ($getData as $id){

            $service = BusinessService::find($id);
            $ap_services[] = [
              'id' => $id,
              'name' => $service->subCategory->name,
              'personels' => AppointmentPersonelResource::collection($service->personels),
            ];

        }
        return response()->json([
           'personels' => $ap_services,
        ]);
    }
    /**
     * POST /api/appointment/date/get
     *
     * Bu tarihleri döndürecek
     * <ul>
     * <li>personelIds  gönderilecek </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function getDate(Request $request)
    {
        //$getData = json_decode($request->input('personelIds'));
        $personels=[];
        $getData = $request->personelIds;
        foreach ($getData as $personel_id) {
           $personels[]  = Personel::find($personel_id);
        }
        $business = $personels[0]->business;

        $remainingDays = Carbon::now()->subDays(1)->diffInDays(Carbon::now()->copy()->endOfMonth());

        for ($i = 0; $i < $remainingDays; $i++) {
            $days = Carbon::now()->addDays($i);
            if ($days < Carbon::now()->endOfMonth()) {
                $remainingDate[] = $days;
            }
        }

        foreach($remainingDate as $date){
            $dates[] = [
                'date'  => $date->translatedFormat('d'),
                'day' => $date->translatedFormat('D'),
                'text' => $date->translatedFormat('F d D'),
                'value' => $date,
            ];
        }

        return response()->json([
           'dates' => $dates,
           'business_id' => $business->id,
        ]);
    }
    /**
     * POST /api/appointment/clock/get
     *
     * Bu saatleri döndürecek
     * <ul>
     * <li>date ve business_id gönderilecek </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function getClock(Request $request)
    {
        $getDate = Carbon::parse($request->date);
        $business = Business::find($request->business_id);
        $disabledDays=[];
        $filledTime = $this->findTimes($business);
        foreach ($filledTime as $time) {
            $disabledDays[] = $time;
        }

        $clocks = [];
        $loop = 0;
        for($i=\Illuminate\Support\Carbon::parse($business->start_time); $i < \Illuminate\Support\Carbon::parse($business->end_time); $i->addMinute($business->appoinment_range)){
            $clock = [
                'id' => $getDate->format('d_m_Y_'. $i->format('H_i')),
                'saat' =>  $i->format('H:i'),
                'value' => $getDate->format('d.m.Y '. $i->format('H:i')),
                'durum' => in_array($getDate->format('d.m.Y '). $i->format('H:i'), $disabledDays) ? false : true,
            ];
            $clocks[] = $clock;
        }

        return response()->json([
            'clocks' => $clocks,
        ]);

    }
    /**
     * POST /api/appointment/create
     *
     * Bu saatleri döndürecek
     * <ul>
     * <li>eğer giriş yapmışsa customer_id </li>
     * <li>eğer giriş yapmamışsa name, surname, phone </li>
     * <li>gerekli olanlar => business_id, services, appointment_date, personels </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function create(Request $request)
    {
        $business = Business::find($request->business_id);
        if (isset($request->customer_id)) {
            $appointment = new Appointment();
            $appointment->business_id = $business->id;
            $appointment->customer_id = $request->customer_id;
        } else {
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
        }

        if ($business->approve_type == 1) {
            $appointment->status = 1;
        } else {
            $appointment->status = 0;
        }
        $appointment->save();

        $loop = 0;
        $clock = Carbon::parse($request->input('appointment_date'));
        $sumTime = 0;

        foreach ($request->services as $service) {
            $appointmentService = new AppointmentServices();
            $appointmentService->appointment_id = $appointment->id;
            $appointmentService->personel_id = $request->personels[$loop];
            $appointmentService->service_id = $service;
            $findService = BusinessService::find($service);
            $appointmentService->start_time = $clock->format('d.m.Y H:i');
            $appointmentService->end_time = $clock->addMinute($findService->time)->format('d.m.Y H:i');
            $sumTime += $findService->time;
            $appointmentService->save();
            $loop++;
        }
        $appointment->start_time = Carbon::parse($request->input('appointment_date'))->format('d.m.Y H:i');
        $appointment->end_time = Carbon::parse($request->input('appointment_date'))->addMinute($sumTime)->format('d.m.Y H:i');
        $appointment->save();
        return response()->json([
           'status' => 'Success',
           'message' => $business->name . " işletmesine " . $appointment->start_time ." - ". $appointment->end_time . " arasında randevu alındı",
        ]);
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
}
