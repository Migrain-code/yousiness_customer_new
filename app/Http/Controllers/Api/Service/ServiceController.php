<?php

namespace App\Http\Controllers\Api\Service;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCategoryResource;
use App\Http\Resources\ServiceSubCategoryResource;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
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
    /**
     * @group Services
     *
     */
    public function subCategory(Request $request)
    {
        $service = ServiceCategory::where('id', $request->category_id)->first();
        $newServices = ServiceCategory::where('slug', $service->slug)->get();
        $womanServices=[];
        $manServices=[];
        foreach ($newServices as $nService){
            if ($nService->type_id == 1){
                foreach ($nService->subCategories as $subService){
                    $womanServices [] = [
                       'id' => $subService->id,
                       'name' => $subService->name
                    ];
                }
            }
            else{
                foreach ($nService->subCategories as $subService){
                    $manServices [] = [
                        'id' => $subService->id,
                        'name' => $subService->name
                    ];
                }
            }
        }

        return response()->json([
           'womanSubServices' => $womanServices,
           'manSubServices' => $manServices,
        ]);

    }
    /**
     * @group Services
     *
     */
    public function abroad()
    {
        $abroadServices = ServiceSubCategory::where('is_abroad', 1)->whereNotNull('featured')->orderBy('featured', 'asc')->get();
        return response()->json([
           'abroad_services'=> ServiceSubCategoryResource::collection($abroadServices),
        ]);
    }
}
