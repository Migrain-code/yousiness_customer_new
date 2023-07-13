<?php

namespace App\Http\Controllers\Api\Salon;

use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessCategoryResource;
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
        $businesses = Business::all();
        return response()->json([
            'salons' => BusinessResource::collection($businesses),
        ]);
    }
}
