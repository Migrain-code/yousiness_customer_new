<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdsResource;
use App\Models\Ads;
use Illuminate\Http\Request;
/**
 *
 * @group Ads
 *
 */
class AdsController extends Controller
{
    public function list()
    {
        $ads = Ads::select('image', 'link')->get();
        return response()->json([
            'ads' => AdsResource::collection($ads)
        ]);
    }
    public function get()
    {
        $ads = Ads::select('image', 'link')->latest()->first();
        return response()->json([
            'ads' => AdsResource::make($ads)
        ]);
    }
}
