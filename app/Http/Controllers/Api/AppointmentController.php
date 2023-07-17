<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Business;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * POST api/appointment/business/get
     *
     * Bu işletmenin hizmetlerini döndürecek
     * <ul>
     * <li>business_id  istenirse gönderilebilir </li>
     *</ul>
     * @group Appointment
     *
     *
     */
    public function businessGet(Request $request)
    {
        $business = Business::find($request->id);
        if ($business){
            /*Woman Services*/
            $womanServices = $business->services()->where('type', 1)->with('categorys')->get();
            $womanServiceCategories = $womanServices->groupBy('categorys.name');

            $transformedDataWoman = [];
            foreach ($womanServiceCategories as $category => $services) {
                $transformedServices = ServiceResource::collection($services);
                $transformedDataWoman[$category] = $transformedServices;
            }
            /*Man Services*/
            $transformedDataMan=[];
            $manServices=$business->services()->where('type',2)->get();
            $manServiceCategories = $manServices->groupBy('categorys.name');
            foreach ($manServiceCategories as $category => $services) {
                $transformedServices = ServiceResource::collection($services);
                $transformedDataMan[$category] = $transformedServices;
            }
            return response()->json([
                'womanServices' => $transformedDataWoman,
                'manServices' => $transformedDataMan,
            ]);
        }
        else{
            return response()->json([
               'status' => "danger",
               'message' => "İşletme Kaydı Bulunamadı"
            ]);
        }
    }
}
