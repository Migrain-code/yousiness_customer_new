<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityGetRequest;
use App\Http\Resources\City;
use App\Http\Resources\District;
use Illuminate\Http\Request;

/**
 *
 * @group City
 *
 **/
class CityController extends Controller
{
    /**
     *
     * GET api/city/list
     *
     * Şehir Listesi. Direk get isteği atılacak Header veya body gönderimine gerek yok
     * @group City
     *
     *
     * */
    public function index()
    {
        $cities = \App\Models\Country::all()->take(3);
        return response()->json([
           'cities'=> City::collection($cities)
        ]);
    }
    /**
     *POST api/city/get
     *
     * City id gönderilen şehrin bilgilerini ve ilçe verisini döndürür.
     *
     * @group City
     *
     *
     **/
    public function get(CityGetRequest $request)
    {
        $country = \App\Models\Country::find($request->input('city_id'));
        if ($country){
            return response()->json([
                'status'=>"success",
                'city'=>new City($country),
                'districts' => District::collection($country->cities),
            ]);
        }
        return response()->json([
           'status' => "error",
           'message' => "Die Stadt konnte nicht gefunden werden."
        ]);
    }

    public function search(Request $request)
    {

        $cities = \App\Models\City::where('name', 'like', '%' . $request->q . '%')
            ->orWhere('post_code', 'like', '%' . $request->q . '%')
            ->take(50)
            ->get();

        return response()->json([
           'cities' => $cities,
        ]);
    }
}
