<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    use HasFactory;

    public function typeCategories()
    {
        return $this->hasMany(BusinessTypeCategory::class, 'category_id', 'id');
    }
    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'business_type_categories', 'category_id', 'business_id');
    }
}
