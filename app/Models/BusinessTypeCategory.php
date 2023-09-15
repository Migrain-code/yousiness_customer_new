<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessTypeCategory extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(BusinessCategory::class, 'id', 'category_id');
    }

    public function business()
    {
        return $this->hasOne(Business::class, 'id', 'business_id');
    }
}
