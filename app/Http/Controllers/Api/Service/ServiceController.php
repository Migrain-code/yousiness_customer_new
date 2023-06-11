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
}
