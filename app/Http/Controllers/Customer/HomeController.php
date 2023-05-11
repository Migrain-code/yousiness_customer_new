<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentServices;
use App\Models\Business;
use App\Models\BusinessComment;
use App\Models\BusinessService;
use App\Models\Customer;
use App\Models\CustomerFavorite;
use App\Models\District;
use App\Models\PackageSale;
use App\Models\Personel;
use App\Models\PersonelService;
use App\Models\ProductSales;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $customer = auth('customer')->user();

        $appointments = [];
        $sum_total = 0;/*total system payout*/
        $appointmentTotal = 0;/*appointment payment*/
        $appointmentTotals = [];
        foreach ($customer->active_appointments as $appointment) {
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
        $orderTotal =$customer->orders->sum('total');/*product sale payments*/
        $sum_total+=$orderTotal;
        $packetPayment=$customer->packets->sum('total');
        $sum_total+=$packetPayment;
        $payments = ['appointment' => $appointmentTotal, 'total' => $sum_total, 'orderTotal'=> $orderTotal, 'packetPayment'=>$packetPayment];

        /*business favorite id array*/
        $favorites = [];
        foreach ($customer->favorites as $favorite) {
            $favorites[] = $favorite->business_id;
        }

        return view('customer.home', compact('customer', 'appointments', 'appointmentTotals', 'payments', 'favorites'));
    }

    public function appointments()
    {
        $customer = auth('customer')->user();

        return view('customer.appointment.index', compact('customer'));
    }

    public function appointmentDetail($id)
    {
        $appointment=Appointment::find($id);
        if ($appointment){
            return view('customer.appointment.detail', compact('appointment'));
        }
    }

    public function addComment(Request $request)
    {
        $request->validate([
            'rating'=>"required|min:1",
            'content'=>"required",
            'terms'=>"accepted",
        ], [], [
            'rating'=>"Puan",
            'content'=>"Yorum Metni",
            'terms'=>"Şartlar ve Koşullar"
        ]);
        $businessComment=new BusinessComment();
        $businessComment->business_id=$request->input('business_id');
        $businessComment->point=$request->input('rating');
        $businessComment->content=$request->input('content');
        if ($businessComment->save()){
            Appointment::find($request->input('appointment_id'))->update([
                'comment_status'=>1,
            ]);
            return back()->with('response', [
               'status'=>"success",
               'message'=>"Yorumunuz Başarılı Bir Şekilde İletildi"
            ]);
        }
    }
    public function packets()
    {
        $customer = auth('customer')->user();
        $packets= $customer->packets()->paginate(4);
        $packageTypes=[
            'Seans',
            'Dakika'
        ];
        return view('customer.packet.index', compact('packets', 'packageTypes'));
    }
    public function packetDetail($id)
    {
        $packageTypes=[
            'Seans',
            'Dakika'
        ];
        $packet=PackageSale::find($id);
        if ($packet){
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
        $orders=$customer->orders()->paginate(5);

        return view('customer.order.index', compact('customer', 'orders', 'paymentTypes'));
    }
    public function favorites()
    {
        $customer = auth('customer')->user();
        $favorites=CustomerFavorite::where('customer_id', $customer->id)->paginate(8);
        return view('customer.favorite.index', compact('customer', 'favorites'));
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
        $appointment->customer->sendSms($appointment->business->name. ' İşletmesine ' . $appointment->start_time.' tarihindeki randevunuz iptal edildi.');
        return response()->json([
            'status' => "success",
            'message' => $appointment->start_date . "Tarihindeki Randevunuz Başarılı Bir Şekilde İptal Edildi",
        ]);
    }

    public function addFavorite(Request $request)
    {
        $favorite = new CustomerFavorite();
        $favorite->customer_id = auth('customer')->id();
        $favorite->business_id = $request->id;
        $favorite->save();
        return response()->json([
            'status' => "success",
            'message' => "İşletme Favorilerinize Eklendi",
        ]);
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
}
