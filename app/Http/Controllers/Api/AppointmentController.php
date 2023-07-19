<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentPersonelResource;
use App\Http\Resources\PersonelResource;
use App\Http\Resources\ServiceResource;
use App\Models\Business;
use App\Models\BusinessService;
use Illuminate\Http\Request;

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
        //$getData = json_decode($request->input('serviceIds'));
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
}
