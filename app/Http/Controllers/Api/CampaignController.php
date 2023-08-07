<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CampaignListResource;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CampaignController extends Controller
{
    /**
     * @group Campaigns
     *
     *
     * */
    public function list()
    {
        $campaigns = Campaign::where('status', 1)
            ->where('start_time', '<', Carbon::now())
            ->where('end_date', '>', Carbon::now())
            ->get();
        return response()->json([
            'campaigns' => CampaignListResource::collection($campaigns),
        ]);
    }
}
