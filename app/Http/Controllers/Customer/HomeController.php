<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Appointment;
use App\Models\Business;
use App\Models\BusinessComment;
use App\Models\Campaign;
use App\Models\CustomerFavorite;
use App\Models\District;
use App\Models\PackageSale;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $customer = auth('customer')->user();
        $ads = Ads::all();
        $activeAppointments = Appointment::where('customer_id', $customer->id)
            ->where(function ($query) {
                $query->where('status', 1)
                    ->orWhere('status', 0);
            })
            ->latest()
            ->get();
        $appointments = [];
        $sum_total = 0;/*total system payout*/
        $appointmentTotal = 0;/*appointment payment*/
        $appointmentTotals = [];
        foreach ($activeAppointments as $appointment) {
            if (Carbon::parse($appointment->end_time) > Carbon::now()) {
                $appointments[] = $appointment;
                $total = 0;
                foreach ($appointment->services as $service) {
                    $total += $service->service->price;
                }
                $appointmentTotal += $total;
                $appointmentTotals[] = $total;
            }
        }
        $sum_total += $appointmentTotal;
        $orderTotal = $customer->orders->sum('total');/*product sale payments*/
        $sum_total += $orderTotal;
        $packetPayment = $customer->packets->sum('total');
        $sum_total += $packetPayment;
        $payments = ['appointment' => $appointmentTotal, 'total' => $sum_total, 'orderTotal' => $orderTotal, 'packetPayment' => $packetPayment];

        /*business favorite id array*/
        $favorites = [];
        foreach ($customer->favorites as $favorite) {
            $favorites[] = $favorite->business_id;
        }

        return view('customer.home', compact('ads','customer', 'appointments', 'appointmentTotals', 'payments', 'favorites'));
    }

    public function appointments()
    {
        $customer = auth('customer')->user();

        return view('customer.appointment.index', compact('customer'));
    }

    public function appointmentDetail($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            return view('customer.appointment.detail', compact('appointment'));
        }
    }

    public function addComment(Request $request)
    {
        $request->validate([
            'rating' => "required|min:1",
            'content' => "required",
            'terms' => "accepted",
        ], [], [
            'rating' => "Puan",
            'content' => "Yorum Metni",
            'terms' => "Şartlar ve Koşullar"
        ]);
        $businessComment = new BusinessComment();
        $businessComment->business_id = $request->input('business_id');
        $businessComment->customer_id = auth('customer')->id();
        $businessComment->point = $request->input('rating');
        $businessComment->content = $request->input('content');
        if ($businessComment->save()) {
            Appointment::find($request->input('appointment_id'))->update([
                'comment_status' => 1,
            ]);
            return back()->with('response', [
                'status' => "success",
                'message' => "Yorumunuz Başarılı Bir Şekilde İletildi"
            ]);
        }
    }

    public function packets()
    {
        $customer = auth('customer')->user();
        $packets = $customer->packets()->paginate(setting('speed_pagination_number'));
        $packageTypes = [
            'Seans',
            'Dakika'
        ];
        return view('customer.packet.index', compact('packets', 'packageTypes'));
    }

    public function campaigns()
    {
        $customer = auth('customer')->user();
        $campaigns = $customer->campaigns()->paginate(setting('speed_pagination_number'));
        //dd($campaigns);
        return view('customer.campaign.index', compact('campaigns'));
    }

    public function campaignDetail(Request $request)
    {
        $campaign = Campaign::where('id',$request->id)->with('business')->get();
        return $campaign;
    }
    public function packetDetail($id)
    {
        $packageTypes = [
            'Seans',
            'Dakika'
        ];
        $packet = PackageSale::find($id);
        if ($packet) {
            return view('customer.packet.detail', compact('packet', 'packageTypes'));
        }
        abort(404);
    }

    public function orders()
    {
        $customer = auth('customer')->user();
        $paymentTypes = [
            'Nakit Ödeme',
            'Banka/Kredi Kartı',
            'EFT/Havale',
            'Diğer',
        ];
        $orders = $customer->orders()->paginate(setting('speed_pagination_number'));

        return view('customer.order.index', compact('customer', 'orders', 'paymentTypes'));
    }

    public function favorites()
    {
        $customer = auth('customer')->user();
        $favorites = CustomerFavorite::where('customer_id', $customer->id)->paginate(setting('speed_pagination_number'));
        return view('customer.favorite.index', compact('customer', 'favorites'));
    }

    public function comments()
    {
        $businessComments = BusinessComment::where('customer_id', auth('customer')->id())->paginate(setting('speed_pagination_number'));
        return view('customer.comment.index', compact('businessComments'));
    }

    public function addicted()
    {
        $customer = auth('customer')->user();
        $appointments = Appointment::where('customer_id', $customer->id)
            ->groupBy('business_id')
            ->select('business_id', DB::raw('count(*) as count_appointments'))
            ->orderBy('count_appointments', 'desc')
            ->get();
        $businesses = [];
        foreach ($appointments as $appointment) {
            $businesses[] = Business::find($appointment->business_id);
        }

        return view('customer.addicted.index', compact('customer', 'businesses'));
    }

    public function getDistrict(Request $request)
    {
        $districts = District::where('city_id', $request->city_id)->get();
        return $districts;
    }

    public function cancelAppointment(Request $request)
    {
        $appointment = Appointment::find($request->id);
        $appointment->status = 8;
        $appointment->save();
        $appointment->customer->sendSms($appointment->business->name . ' İşletmesine ' . $appointment->start_time . ' tarihindeki randevunuz iptal edildi.');
        return response()->json([
            'status' => "success",
            'message' => $appointment->start_date . "Tarihindeki Randevunuz Başarılı Bir Şekilde İptal Edildi",
        ]);
    }

    public function addFavorite(Request $request)
    {
        $existBusiness = CustomerFavorite::where('customer_id', auth('customer')->id())
            ->where('business_id', $request->id)
            ->first();
        if ($existBusiness) {
            $existBusiness->delete();
            return response()->json([
                'status' => "info",
                'message' => "İşletme Favorilerinizden Çıkarıldı",
                'type' => "delete"
            ]);
        } else {
            $favorite = new CustomerFavorite();
            $favorite->customer_id = auth('customer')->id();
            $favorite->business_id = $request->id;
            $favorite->save();
            return response()->json([
                'status' => "success",
                'message' => "İşletme Favorilerinize Eklendi",
                'type' => "add"
            ]);
        }

    }

    public function removeFavorite(Request $request)
    {
        $favorite = CustomerFavorite::find($request->id);
        if ($favorite->delete()) {
            return response()->json([
                'status' => "success",
                'message' => "İşletme Favorilerinizden Çıkarıldı",
            ]);
        }
    }

    public function permissions()
    {
        return view('customer.permission.edit');
    }

    public function permissionUpdate(Request $request)
    {
        $permission = userInfo()->permissions;
        $notification = $request->has('is_notification') ? 1 : 0;
        $email = $request->has('is_email') ? 1 : 0;
        $sms = $request->has('is_sms') ? 1 : 0;
        $phone = $request->has('is_phone') ? 1 : 0;

        // Kullanıcının izinlerini güncelliyoruz
        $permission->update([
            'is_notification' => $notification,
            'is_email' => $email,
            'is_sms' => $sms,
            'is_phone' => $phone,
        ]);
        $permission->save();
        return back()->with('response', [
           'status' => "success",
           'message' => "Bildirim izinleri güncellendi"
        ]);


    }
}
