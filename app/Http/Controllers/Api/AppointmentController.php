<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentPersonelResource;
use App\Http\Resources\PersonelResource;
use App\Http\Resources\ServiceResource;
use App\Models\Business;
use App\Models\BusinessService;
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
        $getData = json_decode($request->input('serviceIds'));
        //$getData = $request->serviceIds;
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

    public function getDate(Request $request)
    {
        $getData = json_decode($request->input('personelIds'));
        $personels=[];
        //$getData = $request->personelIds;
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

        $filledTime = $this->findTimes($business);

        foreach ($filledTime as $time) {
            $disabledDays[] = Carbon::parse($time)->format('H:i');
        }


        foreach($remainingDate as $date){
            $clocks = [];
            for($i=\Illuminate\Support\Carbon::parse($business->start_time); $i < \Illuminate\Support\Carbon::parse($business->end_time); $i->addMinute($business->appoinment_range)){
                $clock = [
                    'saat' =>  $i->format('H:i'),
                    'value' => $date->format('d.m.Y '. $i->format('H:i')),
                    'durum' => in_array($i->format('H:i'), $disabledDays) ? false : true,
                ];
                $clocks[] = $clock;
            }

            $dates[] = [
                'date'  => $date->translatedFormat('d'),
                'day' => $date->translatedFormat('D'),
                'text' => $date->translatedFormat('F d D'),
                'clocks' => $clocks
            ];
        }

        return response()->json([
           'dates' => $dates,
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
