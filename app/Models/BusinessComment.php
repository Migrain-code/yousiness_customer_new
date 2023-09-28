<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessComment extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id')->withDefault([
            'name' => 'Müşteri Silinmiş',
            'slug' => 'musteri-silinmis',
        ]);
    }

    public function business()
    {
        return $this->hasOne(Business::class, 'id', 'business_id')->withDefault([
            'name' => 'İşletme Silinmiş',
            'slug' => 'isletme-silinmis',
            'city' => 'Bilinmiyor'
        ]);

    }
}
