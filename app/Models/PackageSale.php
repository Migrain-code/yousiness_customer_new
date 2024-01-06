<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageSale extends Model
{
    use HasFactory;
    protected $dates=["seller_date"];
    public function customer()
    {
        return $this->hasOne(Customer::class,'id', 'customer_id')->withDefault([
            'name' => 'Gelöschter Kunde',
        ]);
    }
    public function personel()
    {
        return $this->hasOne(Personel::class,'id', 'personel_id')->withDefault([
            'name' => 'Personel Silinmiş',
        ]);
    }

    public function business()
    {
        return $this->hasOne(Business::class,'id', 'business_id')->withDefault([
            'name' => 'İşletme Silinmiş',
        ]);
    }
    public function service()
    {
        return $this->hasOne(BusinessService::class,'id', 'service_id');
    }

    public function usages()
    {
        return $this->hasMany(PackageUsage::class, 'package_id', 'id');
    }
    public function payments()
    {
        return $this->hasMany(PackagePayment::class, 'package_id', 'id');
    }
}
