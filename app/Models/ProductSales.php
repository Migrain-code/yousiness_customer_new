<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSales extends Model
{
    use HasFactory;

    const PAYMENT_TYPES = [
        0 => 'Barzahlung',
        1 => 'Lastschrift / Kreditkarte',
        2 => 'Überweisung',
        3 => 'Andere',
    ];

    public function paymentType()
    {
        return self::PAYMENT_TYPES[$this->payment_type];
    }
    public function customer()
    {
        return $this->hasOne(Customer::class,'id', 'customer_id');
    }

    public function personel()
    {
        return $this->hasOne(Personel::class,'id', 'personel_id');
    }

    public function business()
    {
        return $this->hasOne(Business::class,'id', 'business_id')->withDefault([
            'name' => 'İşletme Silinmiş',
            'slug' => 'isletme-silinmis',
            'city' => 'Bilinmiyor'
        ]);
    }
    public function product()
    {
        return $this->hasOne(Product::class,'id', 'product_id');
    }

}
