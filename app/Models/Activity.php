<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $dates=['start_date', 'stop_date'];

    public function personels()
    {
        return $this->hasMany(ActivityBusiness::class, 'activity_id', 'id')->where('status', 1);
    }
    public function sponsors()
    {
        return $this->hasMany(ActivitySponsor::class, 'activity_id', 'id')->latest();
    }
}
