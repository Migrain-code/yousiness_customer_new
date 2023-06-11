<?php

namespace App\Http\Controllers\Api\Salon;

use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessCategoryResource;
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
}
