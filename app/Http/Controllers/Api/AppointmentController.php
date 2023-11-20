<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentPersonelResource;
use App\Http\Resources\PersonelResource;
use App\Http\Resources\ServiceResource;
use App\Models\Appointment;
use App\Models\AppointmentServices;
use App\Models\Business;
use App\Models\BusinessService;
use App\Models\Customer;
use App\Models\CustomerNotificationMobile;
use App\Models\Personel;
use App\Models\SmsConfirmation;
use App\Services\Sms;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class AppointmentController extends Controller
{
    /**
     * POST /api/appointment/business/get
     *
     * Bu işletmenin hizmetlerini döndürecek
     * <ul>
     * <li>business_id  istenirse gönderilebilir </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function businessGet(Request $request)
    {
        $business = Business::find($request->id);
        if ($business) {
            /* Woman Services */
            $womanServices = $business->services()->where('type', 1)->with('categorys')->get();
            $womanServiceCategories = $womanServices->groupBy('categorys.name');

            $transformedDataWoman = [];
            foreach ($womanServiceCategories as $category => $services) {

                $transformedServices = [];
                foreach ($services as $service) {
                    $transformedServices[] = [
                        'id' => $service->id,
                        'name' => $service->subCategory->name,
                        'price' => $service->price,
                    ];
                }
                $transformedDataWoman[] = [
                    'id' => $services->first()->category,
                    'title' => $category,
                    'detail' => $transformedServices,
                ];
            }

            /* Man Services */
            $transformedDataMan = [];
            $manServices = $business->services()->where('type', 2)->get();
            $manServiceCategories = $manServices->groupBy('categorys.name');
            foreach ($manServiceCategories as $category => $services) {
                $transformedServices = [];
                foreach ($services as $service) {
                    $transformedServices[] = [
                        'id' => $service->id,
                        'name' => $service->subCategory->name,
                        'price' => $service->price,
                    ];
                }
                $transformedDataMan[] = [
                    'id' => $services->first()->category,
                    'title' => $category,
                    'detail' => $transformedServices,
                ];
            }

            return response()->json([
                'womanServices' => $transformedDataWoman,
                'manServices' => $transformedDataMan,
            ]);
        } else {
            return response()->json([
                'status' => 'danger',
                'message' => 'İşletme Kaydı Bulunamadı',
            ]);
        }
    }

    /**
     * POST /api/appointment/personal/get
     *
     * Bu hizmetlerin personellerini döndürecek
     * <ul>
     * <li>serviceIds  gönderilecek </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */

    public function personalGet(Request $request)
    {
        $getData = $request->serviceIds;

        $ap_services = [];
        foreach ($getData as $id) {

            $service = BusinessService::find($id);
            $ap_services[] = [
                'id' => $id,
                'name' => $service->subCategory->name,
                'personels' => AppointmentPersonelResource::collection($service->personels),
            ];

        }
        return response()->json([
            'personels' => $ap_services,
        ]);
    }

    /**
     * POST /api/appointment/date/get
     *
     * Bu tarihleri döndürecek
     * <ul>
     * <li>personelIds  gönderilecek </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function getDate(Request $request)
    {
        $personels = [];
        $getData = $request->personelIds;

        foreach ($getData as $personel_id) {
            $personels[] = Personel::find($personel_id);
        }
        $business = Business::find($request->business_id);

        $remainingDays = Carbon::now()->subDays(1)->diffInDays(Carbon::now()->copy()->endOfMonth());

        for ($i = 0; $i < $remainingDays; $i++) {
            $days = Carbon::now()->addDays($i);

            if ($days < Carbon::now()->endOfMonth()) {
                $remainingDate[] = $days;
            }
        }

        foreach ($remainingDate as $date) {
            $dateStartOfDay = clone $date;
            $dateStartOfDay->startOfDay();

            $today = Carbon::now()->startOfDay();
            $tomorrow = Carbon::now()->addDays(1)->startOfDay();

            if ($dateStartOfDay->eq($today)) {
                $dates[] = [
                    'date' => $date->translatedFormat('d'),
                    'day' => "Bugün",
                    'text' => "Bugün",
                    'value' => $date,
                ];
            } else if ($dateStartOfDay->eq($tomorrow)) {
                $dates[] = [
                    'date' => $date->translatedFormat('d'),
                    'day' => "Yarın",
                    'text' => "Yarın",
                    'value' => $date,
                ];
            } else {
                $dates[] = [
                    'date' => $date->translatedFormat('d'),
                    'day' => $date->translatedFormat('l'),
                    'text' => $date->translatedFormat('d F l'),
                    'value' => $date,
                ];
            }
        }


        return response()->json([
            'dates' => $dates,
            'business_id' => $business->id,
        ]);
    }

    /**
     * POST /api/appointment/clock/get
     *
     * Bu saatleri döndürecek
     * <ul>
     * <li>date ve business_id gönderilecek </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function getClock(Request $request)
    {
        $getDate = Carbon::parse($request->date);
        $business = Business::find($request->business_id);
        $uniqueArray = array_unique($request->personals);
        $personels = [];
        foreach ($uniqueArray as $id){
            $personels[]= Personel::find($id);
        }

        $newClocks=[];
        foreach ($personels as $personel){
            $clocks = [];
            $loop = 0;
            $disabledDays = [];
            $disabledDays[] = $this->findTimes($personel);
            for ($i = \Illuminate\Support\Carbon::parse($personel->start_time); $i < \Illuminate\Support\Carbon::parse($personel->end_time); $i->addMinute($personel->range)) {
                if (Carbon::parse($getDate->format('d.m.Y '))->dayOfWeek == $business->off_day) {
                    $clock = [
                        'id' => $getDate->format('d_m_Y_' . $i->format('H_i')),
                        'saat' => 'İşletme bu tarihte hizmet vermemektedir',
                        'value' => $getDate->format('d.m.Y ' . $i->format('H:i')),
                        'durum' => false,
                    ];
                    if ($loop == 0) {
                        $clocks[] = $clock;
                    }

                    $loop++;

                } else {
                        $clock = [
                            'id' => $getDate->format('d_m_Y_' . $i->format('H_i')),
                            'saat' => $i->format('H:i'),
                            'value' => $getDate->format('d.m.Y ' . $i->format('H:i')),
                            'durum' => in_array($getDate->format('d.m.Y ') . $i->format('H:i'), $disabledDays[0]) ? false : true,
                        ];
                        $clocks[] = $clock;
                }
            }
            $newClocks[] = [
                    'personel' => PersonelResource::make($personel),
                    'clocks' => $clocks,
            ];

        }

        return response()->json([
            'personel_clocks' => $newClocks,
        ]);

    }

    /**
     * POST /api/appointment/create
     *
     * Bu saatleri döndürecek
     * <ul>
     * <li>eğer giriş yapmışsa customer_id </li>
     * <li>eğer giriş yapmamışsa name, surname, phone </li>
     * <li>gerekli olanlar => business_id, services, appointment_date, personels </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function create(Request $request)
    {
        /*if (count($request->personels) != count($request->services)) {
            return response()->json([
                'status' => "warning",
                'message' => "Seçilen Hizmet Sayısı Kadar Personel Seçimi Yapılmalı"
            ]);
        }*/
        $business = Business::find($request->business_id);
        if (isset($request->customer_id)) {
            $appointment = new Appointment();
            $appointment->business_id = $business->id;
            $appointment->customer_id = $request->customer_id;
        } else {
            $appointment = new Appointment();
            $appointment->business_id = $business->id;
            $customer = new Customer();
            $customer->name = $request->input('name');
            $customer->phone = $request->input('phone');
            $customer->email = null;
            $customer->image = "admin/users.svg";
            $customer->password = Hash::make('123456');
            $customer->save();
            $appointment->customer_id = $customer->id;

        }

        if ($business->approve_type == 1) {
            $appointment->status = 1;
        } else {
            $appointment->status = 0;
        }
        $appointment->save();

        $loop = 0;
        $clock = Carbon::parse($request->input('appointment_date'));
        //$sumTime = 0;

        foreach ($request->personels as $personel) {
            $appointmentService = new AppointmentServices();
            $appointmentService->appointment_id = $appointment->id;
            $appointmentService->personel_id = $personel;
            $appointmentService->service_id = $request->services[$loop];
            $findService = BusinessService::find($request->services[$loop]);
            $appointmentService->start_time = $clock->format('d.m.Y H:i');
            $appointmentService->end_time = $clock->addMinute($findService->time)->format('d.m.Y H:i');
            //$sumTime += $findService->time;
            $appointmentService->save();
            $loop++;
        }
        $appointment->date = Carbon::parse($request->input('appointment_date'))->format('Y-m-d H:i:s');
        $appointment->is_verify_phone = 1;
        $appointment->note = $request->note;
        $appointment->campaign_id = $request->campaign_id;

        if ($appointment->save()){
            $title = 'Randevunuz Oluşturuldu';
            $body = $appointment->business->name . " işletmesine " . Carbon::parse($request->input('appointment_date'))->format('Y-m-d') . "tarihine randevunuz alındı";

            $notification =new CustomerNotificationMobile();
            $notification->customer_id = $appointment->customer->id;
            $notification->title = $title;
            $notification->content = $body;
            if ($notification->save()) {
                return response()->json([
                    'status' => 'success',
                    'message' => $business->name . " işletmesine " . Carbon::parse($request->input('appointment_date'))->format('Y-m-d') . "tarihine randevu alındı",
                ]);
            }
        }
    }

    /**
     * POST /api/appointment/cancel
     *
     * Bu saatleri döndürecek
     * <ul>
     * <li>gönderilecek olan =>  appointment_id </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function cancel(Request $request)
    {

        $appointment = Appointment::find($request->appointment_id);
        if ($appointment) {
            $appointment->status = 8;
            $appointment->save();

            $title = 'Randevunuz İptal Edildi';
            $body = $appointment->business->name . " işletmesine " . $appointment->start_time . " - " . $appointment->end_time . " arasında randevunuz iptal edildi";

            $notification =new CustomerNotificationMobile();
            $notification->customer_id = $appointment->customer->id;
            $notification->title = $title;
            $notification->content = $body;
            if ($notification->save()){
                return response()->json([
                    'status' => 'success',
                    'message' => $body
                ]);
            }
        } else {
            return response()->json([
                'status' => 'warning',
                'message' => "Randevu Bulunamadı"
            ]);
        }

    }
    /**
     * POST /api/appointment/verify/phone
     *
     * Bu saatleri döndürecek
     * <ul>
     * <li>gönderilecek olan =>  phone </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function verifyPhone(Request $request)
    {
        if ($request){
            $generateCode = rand(100000, 999999);
            $smsConfirmation = new SmsConfirmation();
            $smsConfirmation->action = "APPOINTMENT-VERIFY";
            $smsConfirmation->expire_at = now()->addMinute(3);
            $smsConfirmation->phone = clearPhone($request->phone);
            $smsConfirmation->code = $generateCode;
            $smsConfirmation->save();

            Sms::send(clearPhone($request->phone), config('settings.site_title') . "Sisteminden randevu almak için, telefon numarası doğrulama kodunuz " . $generateCode);

            return response()->json([
                'status' => "success",
                'message' => "Telefon Numaranıza Doğrulama Kodu Gönderildi."
            ]);
        }
        else{
            return response()->json([
                'status' => "danger",
                'message' => "Bir Hata Sebebi İle Doğrulama Kodu Gönderilemedi"
            ]);
        }
    }
    /**
     * POST /api/appointment/verify/code
     *
     * Bu saatleri döndürecek
     * <ul>
     * <li>gönderilecek olan =>  code </li>
     *</ul>
     * @group Appointment
     *
     *
     *
     */
    public function verifyCode(Request $request)
    {
        $code = SmsConfirmation::where("code", $request->code)->first();
        if ($code) {
            if ($code->expire_at < now()) {
                return response()->json([
                    'status' => "warning",
                    'message' => "Doğrulama Kodunun Süresi Dolmuş."
                ]);
            }
            return response()->json([
                'status' => "success",
                'message' => "Telefon Numaranız doğrulandı."
            ]);
        } else {
            return response()->json([
                'status' => "danger",
                'message' => "Doğrulama Kodu Hatalı."
            ]);
        }
    }
    public function findTimes($personel)
    {
        $disableds = [];

        $appointments = $personel->appointments()->whereNotIn('status', [8])->get();

        foreach ($appointments as $appointment) {
            $startDateTime = Carbon::parse($appointment->start_time);
            $endDateTime = Carbon::parse($appointment->end_time);

            $currentDateTime = $startDateTime->copy();
            while ($currentDateTime <= $endDateTime) {

                $disableds[] = $currentDateTime->format('d.m.Y H:i');

                $currentDateTime->addMinutes(intval($personel->range));
            }
        }

        return $disableds;
    }
}
