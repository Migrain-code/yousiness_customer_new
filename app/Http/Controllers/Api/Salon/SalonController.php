<?php

namespace App\Http\Controllers\Api\Salon;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdsResource;
use App\Http\Resources\BusinessCategoryResource;
use App\Http\Resources\BusinessDetailResource;
use App\Http\Resources\BusinessResource;
use App\Models\Ads;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\ServiceCategory;
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
                'salon' => "Salon konnte nicht gefunden werden."
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
        $ads = Ads::first();
        return response()->json([
           'salons' => BusinessResource::collection($businesses),
           'ads' => AdsResource::make($ads)
        ]);
    }
    /**
     *
     * @group Salon List
     *
     */
    public function popularServices(Request $request)
    {

        $service=ServiceCategory::where('id', $request->id)->first();
        if ($service){
            $businesses = Business::whereHas('services', function ($query) use ($service) {
                $query->where('category', $service->id);
            })->get();
            if ($businesses->count() == 0){
                return response()->json([
                    'status' => 'warning',
                    'message' => "Noch kein Salon, für die von Ihnen gesuchte Art von Dienstleistung gefunden."
                ]);
            }
            return response()->json([
                'salons' => BusinessResource::collection($businesses)
            ]);
        }
        else{
            return response()->json([
                'status' => 'warning',
                'message' => "Gewünschte Dienstleistung konnte nicht gefunden werden."
            ]);
        }
    }
}
