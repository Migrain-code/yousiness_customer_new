<?php

namespace App\Http\Controllers\Api\Activity;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityGetRequest;
use App\Http\Resources\ActivityDetailResource;
use App\Http\Resources\ActivityResource;
use App\Models\Activity;
use App\Models\ActivityBusiness;
use App\Models\Personel;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     *
     * @group Activity
     *
     */
    public function index()
    {
        $activities = Activity::where('status', 1)->get();
        return response()->json([
           'activities' => ActivityResource::collection($activities),
        ], 200);
    }
    /**
     * POST api/activity/get
     *
     * <ul>
     * <li>Etkinliklerin gönderilen id ye göre verisini döndürür.  </li>
     * <li>Ekinlikteki personel sayısını, detaylarını </li>
     * <li>Sponsor sayısını ve detaylarını döndürür </li>
     * <li> Göndermeniz Gereken Tek Veri activity_id </li>
     *</ul>
     * @group Activity
     *
     */
    public function get(ActivityGetRequest $request)
    {
        $activity = Activity::where('status', 1)->where('id', $request->activity_id)->first();
        if ($activity){
            return response()->json([
               'activity' => new ActivityDetailResource($activity)
            ], 200);
        }
        return response()->json([
           'status' => "error",
           'message' => "Etkinlik Bulunamadı"
        ]);
    }
    /**
     * POST api/activity/join
     *
     * <ul>
     * <li> Göndermeniz Gereken Veriler activity_id, phone, password </li>
     *</ul>
     * @group Activity
     *
     */
    public function personelControl(Request $request)
    {
        $personel=Personel::where('email', $request->phone)->first();
        if ($personel){
            if (Hash::check($request->password, $personel->password)){
                if($personel->activities()->where('activity_id', $request->activity_id)->first()){
                    return response()->json([
                        'status'=>"warning",
                        'message'=>"Bu etkinliğe zaten katıldınız",
                    ]);
                }
                else{
                    $activityPersonel=new ActivityBusiness();
                    $activityPersonel->activity_id=$request->activity_id;
                    $activityPersonel->personel_id=$personel->id;
                    $activityPersonel->status=1;
                    if ($activityPersonel->save()){
                        return response()->json([
                            'status'=>"success",
                            'message'=>"Etkinliğe Katılımınız Onaylandı. Aşağıdaki Katılımcı Listesinden Görebilirsiniz",
                        ]);
                    }
                }

            }
            else{
                return response()->json([
                    'status'=>"danger",
                    'message'=>"Kullanıcı Bilgisi Doğrulanamadı",
                ]);
            }
        }
        else{
            return response()->json([
                'status'=>"warning",
                'message'=>"Girdiğiniz telefon numarası sistemde kayıtlı değil",
            ]);
        }
    }
}
