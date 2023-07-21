<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Resources\AppointmentDetailResoruce;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\BusinessResource;
use App\Http\Resources\Customer;
use App\Http\Resources\CustomerCommentResource;
use App\Http\Resources\DealerList;
use App\Http\Resources\FavoriteResource;
use App\Http\Resources\PacketResource;
use App\Http\Resources\ProductSaleResource;
use App\Models\Appointment;
use App\Models\Business;
use App\Models\BusinessComment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

/**
 * @group Customer (Lists)
 */
class CustomerController extends Controller
{
    /**
     * GET api/customer/get
     *
     * Status Codes
     * <ul>
     * <li>200 Başarılı</li>
     * <li>422 Validator Hatası</li>
     * <li> 401 Unauthorized Hatası </li>
     * </ul>
     * Bu müşteri bilgilerini döndürecek
     * @header Bearer {token}
     *
     *
     */
    public function getUser()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            dd($user);
            return response()->json(new Customer($user));
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * GET api/customer/favorite/list
     *
     * Bu müşterinin eklediği favori işletmelerin kayıtlarını döndürecek
     * @header Bearer {token}
     *
     *
     */
    public function getFavorites()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $favorites = $user->favorites;
            return response()->json([
                'favoriteList' => FavoriteResource::collection($favorites)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * GET api/customer/deal/list
     *
     * Bu müşterinin daha önce randevu aldığı işletmelerin kayıtlarını döndürecek
     * @header Bearer {token}
     *
     *
     */
    public function getDealList()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $appointments = Appointment::where('customer_id', $user->id)
                ->groupBy('business_id')
                ->select('business_id', DB::raw('count(*) as count_appointments'))
                ->orderBy('count_appointments', 'desc')
                ->get();
            $businesses = [];
            foreach ($appointments as $appointment) {
                $businesses[] = Business::find($appointment->business_id);
            }
            return response()->json([
                'businesses' => BusinessResource::collection($businesses)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * GET api/customer/order/list
     *
     * Bu müşterinin vermiş olduğu ürün siparişlerini listeleyecek
     * @header Bearer {token}
     *
     *
     */
    public function getOrderList()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $orders = $user->orders;
            return response()->json([
                'orders' => ProductSaleResource::collection($orders)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * GET api/customer/packet/list
     *
     * Bu müşterinin işletmelerden almış olduğu paketlerin listesini verecek
     * @header Bearer {token}
     *
     *
     */
    public function getPacketList()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $packets = $user->packets;
            return response()->json([
                'packetList' => PacketResource::collection($packets)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * GET api/customer/appointment/list
     *
     * Bu müşterinin randevu listesini verecek
     * @header Bearer {token}
     *
     *
     */
    public function getAppointmentList()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $appintments = $user->appointments;
            return response()->json([
                'appointments' => AppointmentResource::collection($appintments)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     * POST api/customer/appointment/get
     *
     * Bu müşterinin randevu listesini verecek id gönderilecek
     * @header Bearer {token}
     *
     *
     */
    public function getAppointmentDetail(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $appintment = Appointment::where('id', $request->id)->first();
            return response()->json([
                'appointments' => AppointmentDetailResoruce::make($appintment)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     * GET api/customer/appointment/upcoming/list
     *
     * Bu müşterinin yaklaşan randevu listesini verecek
     * @header Bearer {token}
     *
     *
     */
    public function getAppointmentUpcomingList()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $appointments = [];
            $activeAppointments = Appointment::where('customer_id', $user->id)
                ->where(function ($query) {
                    $query->where('status', 1)
                        ->orWhere('status', 0);
                })
                ->latest()
                ->get();
            foreach ($activeAppointments as $appointment) {
                if (Carbon::parse($appointment->end_time) > Carbon::now()) {
                    $appointments[] = $appointment;
                }
            }
            return response()->json([
                'appointments' => AppointmentResource::collection($appointments)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     * GET api/customer/comment/list
     *
     * Bu müşterinin yorum listesini verecek
     * @header Bearer {token}
     *
     *
     */
    public function getCommentList()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $comments = BusinessComment::where('customer_id', $user->id)->get();
            return response()->json([
                'comments' => CustomerCommentResource::collection($comments)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * POST api/customer/update/profile
     *
     * Bu müşterinin profil bilgilerini güncelleyecek endpoint
     * <ul>
     * <li> city_id ve district_id zorunlu alan değildir istenirse gönderilebilir </li>
     * <li>Tarih formatı 2001-09-08 şeklinde (YY-AA-GG) şeklinde olmaıdır </li>
     *</ul>
     * @group Customer (Update)
     * @header Bearer {token}
     *
     *
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            //$request->dd();
            $user->name = $request->input('name');
            $user->phone = $request->input('phone');
            $user->email = $request->input('phone');
            $user->birthday = $request->input('birthday');
            $user->city_id = $request->input('city_id');
            $user->district_id = $request->input('district_id');
            if ($user->save()) {
                return response()->json([
                    'status' => "success",
                    'message' => "Kullanıcı Bilgileriniz Güncellendi",
                    'user' => new Customer($user),
                ]);
            }
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     * POST api/customer/update/password
     *
     * Bu müşterinin şifre bilgilerini güncelleyecek endpoint
     * <br> Gerekli alanlar
     * <ul>
     * <li> password </li>
     * <li> password_confirmation </li>
     *</ul>

     * @header Bearer {token}
     *@group Customer (Update)
     *
     */
    public function updatePassword(ChangePasswordRequest $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $user->password = Hash::make($request->input('password'));
            if ($user->save()){
                return response()->json([
                    'status' => "success",
                    'message'=> "Şifreniz Başarılı Bir Şekilde Güncellendi"
                ]);
            }
        }
        return response()->json(['error' => 'Unauthorized'], 401);

    }
    /**
     * POST api/customer/update/image
     *
     * Bu müşterinin profil fotoğrafını güncelleyecek endpoint
     * <br> Gerekli alanlar
     * <ul>
     * <li> token </li>
     * <li> profile </li>
     *</ul>

     * @header Bearer {token}
     *@group Customer (Update)
     *
     */
    public function updateImage(Request $request)
    {
        $user = Auth::guard('api')->user();

        if ($user) {
            $mime = $request->mime;
            if ($mime === 'image/png' or $mime === 'image/jpeg' or $mime === 'image/jpg') {
                if ($request->profilePhoto){
                    $newProfile = "data:image/jpeg;base64,".$request->profilePhoto;
                    $data = explode(',', $newProfile);
                    $image = base64_decode($data[1]);
                    if ($mime)
                    $path = 'new_images/profiles/' . Str::random(64). ".jpeg";
                    Storage::put($path, $image);
                    $user->image= $path;
                    if ($user->save()){
                        return response()->json([
                            'status' => "success",
                            'message'=> "Profiliniz Başarılı Bir Şekilde Güncellendi"
                        ]);
                    }
                }
                else{
                    return response()->json([
                        'status' => "warning",
                        'message'=> "Profil Fotoğrafı Seçilmedi"
                    ]);
                }
            } else {
                return response()->json([
                   'status' => "warning",
                   'message' => "Sadece png, jpeg, jpg formatlarına izin veriliyor"
                ]);
            }




        }
        return response()->json(['error' => 'Unauthorized'], 401);

    }

    public function base64Converter($base64Data)
    {
        $imageData = base64_decode($base64Data);
        dd($imageData);
        $image = imagecreatefromstring($imageData);

        if ($image !== false) {
            $path = storage_path('app/public/newImage/') . uniqid() . '.png';
            imagepng($image, $path);
            imagedestroy($image);

            // PNG dosyasının storage'a kaydedildiği yol
            return $path;
        } else {
            // Geçersiz bir resim verisi
            return  "Hatalı Format";
        }
    }
    /**
     * POST api/customer/update/notify
     *
     * Bu müşterinin bildirim ayarını güncelleyecek endpoint
     * <br> Gerekli alanlar
     * <ul>
     * <li> token </li>
     * <li> notify </li>
     *</ul>

     * @header Bearer {token}
     *@group Customer (Update)
     *
     */
    public function updateNotify(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $user->is_notify = boolval($request->notify);
            if ($user->save()){
                return response()->json([
                    'status' => "success",
                    'message'=> "Bildirim Ayarlarınız Güncellendi"
                ]);
            }
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
