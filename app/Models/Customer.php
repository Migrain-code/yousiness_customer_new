<?php

namespace App\Models;

use App\Services\Sms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class Customer extends Authenticatable
{
    use HasFactory, HasApiTokens;
    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'customer_id', 'id')->latest();
    }

    public function device()
    {
        return $this->hasOne(Device::class, 'customer_id', 'id')->where('user_type', 0);
    }

    public function campaigns()
    {
        return $this->hasMany(CampaignCustomer::class, 'customer_id', 'id');
    }
    public function notifications()
    {
        return $this->hasMany(CustomerNotificationMobile::class, 'customer_id', 'id');
    }

    public function permissions()
    {
        return $this->hasOne(CustomerNotificationPermission::class, 'customer_id', 'id');
    }

    public function favorites()
    {
        return $this->hasMany(CustomerFavorite::class, 'customer_id', 'id');
    }
    public function orders()
    {
        return $this->hasMany(ProductSales::class, 'customer_id', 'id');
    }

    public function packets()
    {
        return $this->hasMany(PackageSale::class, 'customer_id', 'id');
    }
    public function city()
    {
        return $this->hasOne(Country::class, 'id', 'city_id');
    }
    public function district()
    {
        return $this->hasOne(City::class, 'id', 'district_id');
    }

    public function sendSms($message)
    {
        $clean_phone_number = preg_replace('/[^0-9]/', '', $this->phone);
        Sms::send($clean_phone_number, $message);
        return true;
    }
}
