<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityGetRequest;
use App\Http\Resources\City;
use App\Http\Resources\District;

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
        $cities = \App\Models\City::all();
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
        $city = \App\Models\City::find($request->input('city_id'));
        if ($city){
            return response()->json([
                'status'=>"success",
                'city'=>new City($city),
                'districts' => District::collection($city->districts),
            ]);
        }
        return response()->json([
           'status' => "error",
           'message' => "Şehir Bulunamadı"
        ]);
    }
}
