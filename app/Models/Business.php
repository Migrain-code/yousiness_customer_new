<?php

namespace App\Models;

use App\Models\Admin\BussinessPackage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Business extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['business'];
    const STATUS_LIST=[
        0 =>[
            'text'=>"Kurulum Tamamlanmadı",
        ],
        1=>[
            'text'=>"Engellendi",
        ],
        2=>[
            'text'=>"Aktif"
        ]
    ];

    public function status($type)
    {
        return self::STATUS_LIST[$this->status][$type];
    }
    public function package()
    {
        return $this->hasOne(BussinessPackage::class, 'id', 'package_id');
    }

    public function type()
    {
        return $this->hasOne(BusinnessType::class, 'id', 'type_id');
    }

    public function workTimes()
    {
        return $this->hasMany(BusinessWorkTime::class, 'business_id', 'id')->orderBy('que');
    }

    public function services()
    {
        return $this->hasMany(BusinessService::class, 'business_id', 'id');

    }

    public function personel()
    {
        return $this->hasMany(Personel::class, 'business_id', 'id');
    }

    public function service()
    {
        return $this->hasOne(BusinessService::class, 'business_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(BusinessGallery::class, 'business_id', 'id');
    }

    public function sales()
    {
        return $this->hasMany(ProductSales::class, 'business_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'business_id', 'id');
    }

    public function packages()
    {
        return $this->hasMany(PackageSale::class, 'business_id', 'id');
    }

    public function customers()
    {
        return $this->hasMany(BusinessCustomer::class, 'business_id', 'id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'business_id', 'id');
    }

    public function cities()
    {
        return $this->hasOne(City::class, 'id', 'city');
    }

    public function districts()
    {
        return $this->hasOne(District::class, 'id', 'district');

    }

    public function comments()
    {
        return $this->hasMany(BusinessComment::class, 'business_id', 'id')->latest();
    }
}
