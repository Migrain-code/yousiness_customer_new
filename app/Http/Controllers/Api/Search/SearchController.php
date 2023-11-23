<?php

namespace App\Http\Controllers\Api\Search;

use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessResource;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ->where('city', $request->district_id)
            ->when($request->filled('service_id') || $request->filled('sub_category_id'), function ($q) use ($request) {
                $q->whereHas('services', function ($query) use ($request) {
                    if ($request->filled('service_id')) {
                        $query->where('category', $request->input('service_id'));
                    }
                    if ($request->filled('sub_category_id')) {
                        $query->where('sub_category', $request->input('sub_category_id'));
                    }
                });
            })
            ->when($request->filled('category_id'), function ($q) use ($request) {
                $category = BusinessCategory::where('id', $request->category_id)->first();
                return $q->whereIn('id', $category->businesses->pluck('id'));
            })
            ->get();

        if ($businesses->count() > 0){
                return response()->json([
                    'businesses' => BusinessResource::collection($businesses)
                ]);
            }
            return response()->json([
                'status' => "danger",
                'message' => "Es konnte kein Salon gefunden werden, der die von Ihnen gesuchte Dienstleistung anbietet."
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
            ->when($request->filled('district_id'), function ($q) use ($request) {
                $q->where('district', $request->district_id);
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
            'message' => "Noch kein Salon für die von Ihnen gesuchte Kategorie gefunden."
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
            'message' => "Salon konnte nicht gefunden werden"
        ]);
    }
    /**
     *
     * @group Search
     *
     */
    public function nearMe(Request $request)
    {
        $lat = $request->input('lat'); // Kullanıcıdan alınan latitude
        $lng = $request->input('long'); // Kullanıcıdan alınan longitude

        $distance = 100; // Yakınlık yarıçapı (örneğin, 100 kilometre)

        $businesses = Business::select('businesses.*')
            ->when((!empty($lat) && !empty($lng)), function ($q) use ($lat, $lng, $distance) {
                $q->selectRaw("(6371 * acos(cos(radians(?)) * cos(radians(lat)) * cos(radians(longitude) - radians(?)) + sin(radians(?)) * sin(radians(lat)))) AS distance", [$lat, $lng, $lat])
                    ->havingRaw("distance < ?", [$distance]);
            })
            ->when($request->filled('service_id'), function ($q) use ($request) {
                $q->whereHas('services', function ($query) use ($request) {
                    $query->where('category', $request->input('service_id'));
                });
            })
            ->orderBy('distance', 'asc')
            ->get();

        if ($businesses->count() > 0){
            return response()->json([
                'businesses' => BusinessResource::collection($businesses)
            ]);
        }
        return response()->json([
            'status' => "danger",
            'message' => "Es konnte kein Salon für die von Ihnen gesuchte Dienstleistungskategorie gefunden werden."
        ]);
    }
    /**
     *
     * @group Search
     *
     */
    public function searchCity(Request $request)
    {
        $businesses = Business::query()
            ->when($request->filled('city_id'), function ($q) use ($request) {
                $q->where('city', $request->city_id);
            })
            ->get();
        if ($businesses->count() > 0){
            return response()->json([
                'businesses' => BusinessResource::collection($businesses)
            ]);
        }
        return response()->json([
            'status' => "error",
            'message' => "Es konnte kein Salon in der von Ihnen gesuchten Stadt gefundenwerden."
        ]);
    }
}
