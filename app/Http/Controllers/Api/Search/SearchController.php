<?php

namespace App\Http\Controllers\Api\Search;

use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessResource;
use App\Models\Business;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * POST api/search/service
     *
     * Burada hizmet türüne veya şehir verisine göre işletmelerin verisi döndürülür.
     * <b>Not:</b> city_id, district_id ve service_id ikisinden sadece biri de gönderilebilir.
     *
     * @group Search
     * @queryParam service_id
     * @queryParam city_id
    */
    public function searchService(Request $request)
    {
            $businesses = Business::query()
                ->where('city', $request->city_id)
                ->where('district', $request->district_id)
                ->when($request->filled('service_id'), function ($q) use ($request) {
                    $q->whereHas('services', function ($query) use ($request) {
                        $query->where('category', $request->input('service_id'));
                    });
                })
                ->get();
            if ($businesses->count() > 0){
                return response()->json([
                    'businesses' => BusinessResource::collection($businesses)
                ]);
            }
            return response()->json([
                'status' => "danger",
                'message' => "Aradığınız Hizmet Türünde Hizmet Veren İşletme Kaydı Bulunamadı"
            ]);
    }
    /**
     * POST api/search/business/type
     *
     * Burada işletme türüne veya şehir verisine göre işletmelerin verisi döndürülür.
     * <b>Not:</b> city_id ve category_id ikisinden sadece <u> "biri de"</u> gönderilebilir.
     *
     * @group Search
     *
     * @queryParam category_id
     * @queryParam city_id
     */
    public function searchBusinessType(Request $request)
    {
        $businesses = Business::query()
            ->when($request->filled('city_id'), function ($q) use ($request) {
                $q->where('city', $request->city_id);
            })
            ->when($request->filled('category_id'), function ($q) use ($request) {
                $q->where('category_id', $request->category_id);
            })
            ->get();
        if ($businesses->count() > 0){
            return response()->json([
                'businesses' => BusinessResource::collection($businesses)
            ]);
        }
        return response()->json([
            'status' => "error",
            'message' => "Aradığınız İşletme Türünde Hizmet Veren İşletme Kaydı Bulunamadı"
        ]);
    }
    /**
     *
     * @group Search
     *
     */
    public function searchBusinessName(Request $request)
    {
        $request->validate([
           'name' => "string"
        ], [], [
            'name' => "İşlemte Adı"
        ]);
        $businesses = Business::where('name', 'LIKE', '%'.$request->input('name').'%')->get();
        if ($businesses->count() > 0){
            return response()->json([
                'businesses' => BusinessResource::collection($businesses)
            ]);
        }
        return response()->json([
            'status' => "error",
            'message' => "İşletme Bulunamadı"
        ]);
    }
}
