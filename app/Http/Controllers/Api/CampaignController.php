<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CampaignListResource;
use App\Models\Campaign;
use App\Models\CampaignCustomer;
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

    /**
     * @group Campaigns
     *
     *
     * */
    public function verify(Request $request)
    {
        $campaign = Campaign::where('code', $request->code)->first();

        if ($campaign) {
            $customer = $campaign->customers->where('customer_id', $request->customer_id)->where('status', 1)->first();
            if ($customer) {
                return response()->json([
                    'status' => "warning",
                    'message' => "Bu kupon kodunu zaten kullandınız"
                ]);
            } else {
                $campaignCustomer = new CampaignCustomer();
                $campaignCustomer->campaign_id = $campaign->id;
                $campaignCustomer->customer_id = $request->customer_id;
                if ($campaignCustomer->save()) {
                    return response()->json([
                        'status' => "success",
                        'id' => $campaignCustomer->id,
                        'discount' => $campaign->discount,
                        'message' => $campaign->code . " Kupon Kodu Uygulandı",
                    ]);
                }

            }

        } else {
            return response()->json([
                'status' => "danger",
                'message' => "Kupon Kodu Geçersiz"
            ]);
        }
    }

    /**
     * @group Campaigns
     *
     *
     * */

    public function cancel(Request $request)
    {
        $campaignCustomer = CampaignCustomer::find($request->campaign_id);
        if ($campaignCustomer) {

            $campaignCustomer->delete();
            return response()->json([
                'status' => "success",
                'message' => "Kupon Kodu Kaldırıldı"
            ]);

        } else {
            return response()->json([
                'status' => "danger",
                'message' => "Kupon Koduna Kullanımına Ait Kayıt Bulunamadı"
            ]);
        }
    }
}
