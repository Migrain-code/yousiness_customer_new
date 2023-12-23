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
use App\Http\Resources\CustomerNotificationMobileResource;
use App\Http\Resources\CustomerNotificationPermissionsResource;
use App\Http\Resources\DealerList;
use App\Http\Resources\FavoriteResource;
use App\Http\Resources\PacketPaymentResource;
use App\Http\Resources\PacketResource;
use App\Http\Resources\PacketUsageResource;
use App\Http\Resources\ProductSaleResource;
use App\Models\Appointment;
use App\Models\Business;
use App\Models\BusinessComment;
use App\Models\CustomerFavorite;
use App\Models\PackageSale;
use App\Models\Page;
use App\Models\Setting;
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
     * POST api/customer/favorite/delete
     *
     * Bu müşterinin eklediği favori işletmelerin kayıtlarını döndürecek
     * gönderilecek veriler
     * favorite_id | numeric | favorinin id si göndeilecek
     * @header Bearer {token}
     *
     *
     */
    public function deleteFavorite(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $favorite = $user->favorites()->find($request->favorite_id);

            if ($favorite) {
                $favorite->delete();
                return response()->json([
                    'status' => "success",
                    'message' => "Salon wurde aus Ihren Favoriten entfernt. ",
                ]);
            }
            else{
                return response()->json([
                    'status' => "danger",
                    'message' => "Favorite Not Found. ",
                ]);
            }
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     * POST api/customer/favorite/delete
     *
     * Bu müşterinin eklediği favori işletmelerin kayıtlarını döndürecek
     * gönderilecek veriler
     * business_id | numeric | favorinin id si göndeilecek
     * @header Bearer {token}
     *
     *
     */
    public function addFavorite(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $favorite = $user->favorites()->find($request->business_id);

            if ($favorite) {
                $favorite->delete();
                return response()->json([
                    'status' => "info",
                    'message' => "Salon wurde aus Ihren Favoriten entfernt. ",
                ]);
            }
            else{
                $favorite = new CustomerFavorite();
                $favorite->customer_id = $user->id;
                $favorite->business_id = $request->business_id;
                $favorite->save();
                return response()->json([
                    'status' => "success",
                    'message' => "Salon wurde zu Ihren Favoriten hinzugefügt. ",
                ]);
            }
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
     * Post api/customer/packet/detail
     *
     * Bu müşterinin işletmelerden almış olduğu paketlerin listesini verecek
     * package_id | string| required
     * @header Bearer {token}
     *
     *
     */
    public function packetDetail(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $packet = PackageSale::find($request->package_id);
            $packageTypes = [
                'Sitzung',
                'Minute'
            ];
            if ($packet){
                return response()->json([
                    'packet' => PacketResource::make($packet),
                    'service' => $packet->service->subCategory->name ?? "",
                    'gekauft' => $packet->amount ." ". $packageTypes[$packet->type],
                    'gesamtbetrag' => $packet->total,
                    'verbraucht' => $packet->usages->sum('amount'). " ".$packageTypes[$packet->type],
                    'bezahlt' => $packet->payments->sum('price') . " €",
                    'verbleibend' => $packet->amount - $packet->usages->sum('amount'),
                    'restzahlung' => $packet->total -$packet->payments->sum('price'). " €",
                    'usages' => PacketUsageResource::collection($packet->usages),
                    'payments' => PacketPaymentResource::collection($packet->payments),
                ]);
            } else{
                return response()->json([
                    'status' => 'danger',
                    'message' => "Paket nicht gefunden."
                ], 401);
            }
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
     * GET api/customer/notify/list
     *
     * Bu müşterinin bildirim listesini verecek
     * @header Bearer {token}
     *
     *
     */
    public function getNotifyList()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $notifications = $user->notifications;
            return response()->json([
                'notifications' => CustomerNotificationMobileResource::collection($notifications)
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     * GET api/customer/notify/permission/list
     *
     * Bu müşterinin bildirim izin listesini verecek
     * @header Bearer {token}
     *
     *
     */
    public function getNotifyPermissionList()
    {
        $user = Auth::guard('api')->user();

        if ($user) {
             $permissions = $user->permissions;

            return response()->json([
                'permissions' => CustomerNotificationPermissionsResource::make($permissions)
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
     * POST api/customer/appointment/comment/add
     *
     * Bu müşterinin randevu yorumunu gönderecek
     * Gönderilecek veriler business_id, rating, content, appointment_id
     * @header Bearer {token}
     *
     *
     */
    public function addAppointmentComment(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $businessComment = new BusinessComment();
            $businessComment->business_id = $request->input('business_id');
            $businessComment->customer_id = $user->id;
            $businessComment->point = $request->input('rating');
            $businessComment->content = $request->input('content');
            if ($businessComment->save()) {
                Appointment::find($request->input('appointment_id'))->update([
                    'comment_status' => 1,
                ]);
                return response()->json([
                    'status' => "success",
                    'message' => "Ihr Kommentar wurde erfolgreich übermittelt."
                ]);
            }

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

            $user->name = $request->input('name');
            $user->phone = $request->input('phone');
            $user->email = $request->input('phone');
            $user->birthday = $request->input('birthday');
            $user->city_id = $request->input('city_id');
            $user->gender = $request->input('gender');
            $user->district_id = $request->input('district_id');
            if ($user->gender == 1 and  $user->image == "default/user.png"){
                $user->image = "default/woman.png";
            }
            else{
                if ($user->gender == 2 and  $user->image == "default/woman.png"){
                    $user->image = "default/user.png";
                }
            }

            if ($user->save()) {
                return response()->json([
                    'status' => "success",
                    'message' => "Ihre Benutzerinformationen wurden aktualisiert.",
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
                    'message'=> "Kennwort wurde erfolgreich geändert."
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
                            'message'=> "Ihr Profil wurde erfolgreich aktualisiert."
                        ]);
                    }
                }
                else{
                    return response()->json([
                        'status' => "warning",
                        'message'=> "Es wurde kein Profil Foto ausgewählt.
                        "
                    ]);
                }
            } else {
                return response()->json([
                   'status' => "warning",
                   'message' => "Nur die png, jpeg und jpg Formate werden akzeptiert."
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
            return  "Error";
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
            $permission = $user->permissions;

            $permission->is_sms = boolval($request->is_sms);
            $permission->is_email = boolval($request->is_email);
            $permission->is_notification = boolval($request->is_notification);
            $permission->is_phone = boolval($request->is_phone);
            if ($permission->save()){
                return response()->json([
                    'status' => "success",
                    'message'=> "Ihre Benachrichtigungseinstellungen wurden aktualisiert."
                ]);
            }
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * GET api/customer/delete
     *
     * Bu müşterinin hesabını silecek
     * @header Bearer {token}
     *
     *
     */
    public function destroy()
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $user->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Ihr Konto wurde erfolgreich gelöscht.',
            ]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function settings()
    {
        $settings = [];
        foreach (Setting::all() as $item) {
            $settings[$item->name] = $item->value;
        }

        $gizlilik = Page::where('id', 2)->select('description')->first();
        $kosullaraciklama = Page::where('id', 3)->select('description')->first();
        $impressum = Page::where('id', 1)->select('description')->first();

        return response()->json([
            'settings' => [
                'title' => $settings["speed_mobile_title"],
                'description' => $settings["speed_mobile_description"],
                'playStore' => $settings["speed_mobile_play_store_link"],
                'appStore' => $settings["speed_mobile_app_store_link"],
                'kvkkAciklama' => $gizlilik->description,
                'kosullarAciklama' => $kosullaraciklama->description,
                'impressum' => $impressum->description,
                'paylasmetin' => $settings["speed_mobile_share_description"]." ". env('APP_URL'),
            ]
        ]);
    }
}
