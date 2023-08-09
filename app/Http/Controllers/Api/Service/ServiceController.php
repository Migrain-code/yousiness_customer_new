<?php

namespace App\Http\Controllers\Api\Service;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCategoryResource;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @group Services
     *
     */
    public function index()
    {
        $services=ServiceCategory::where('order_number', '<>', null)->orderBy('order_number', 'asc')->get();
        return response()->json([
           'services' => ServiceCategoryResource::collection($services),
        ]);
    }
    /**
     * @group Services
     *
     */
    public function all()
    {
        $services = ServiceCategory::all();

        $womanServices = [];
        $manServices =[];
        foreach ($services as $service){
            if ($service->type_id == 1){
                $womanServices[] = ServiceCategoryResource::make($service);
            }
            else{
                $manServices[] = ServiceCategoryResource::make($service);
            }
        }
        return response()->json([
           'woman'=> $womanServices,
           'man' => $manServices
        ]);
    }
}
