<?php

namespace App\Http\Controllers\Api\Salon;

use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessCategoryResource;
use App\Http\Resources\BusinessDetailResource;
use App\Http\Resources\BusinessResource;
use App\Models\Business;
use App\Models\BusinessCategory;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     *
     * @group Salon Type
     *
     */
    public function index()
    {
        $categories=BusinessCategory::all();
        return response()->json([
           'salon_types' => BusinessCategoryResource::collection($categories),
        ]);
    }
    /**
     *
     * @group Salon List
     *
     */
    public function all()
    {
        $businesses = Business::select('id','name', 'logo', 'start_time', 'city', 'district')->with('cities', 'districts', 'comments')->get();

        return response()->json([
            'salons' => BusinessResource::collection($businesses),
        ]);
    }
    /**
     *
     * @group Salon List
     *
     */
    public function get(Request $request)
    {
        /*Salon Detayı*/
        $business = Business::find($request->id);

        if ($business){
            return response()->json([
                'status' => "success",
                'salon' => BusinessDetailResource::make($business),
            ]);
        }
        else{
            return response()->json([
                'status' => "danger",
                'salon' => "İşletme Bulunamadı"
            ]);
        }
    }
    /**
     *
     * @group Salon List
     *
     */
    public function popular()
    {
        $businesses = Business::orderByAppointmentCount()->take(10)->get();
        return response()->json([
           'salons' => BusinessResource::collection($businesses)
        ]);
    }
}
