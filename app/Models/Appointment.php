<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable=['comment_status'];
    const STATUS_LIST=[
        0 => [
            'html' => '<span class="badge light badge-warning fw-bolder px-2 py-2">Genehmigung ausstehend</span>',
            'text' => 'Genehmigung ausstehend'
        ],
        1 => [
            'html' => '<span class="badge light badge-success fw-bolder px-2 py-2" style="background-color: #0c4c28">Genehmigt</span>',
            'text' => 'Genehmigt'
        ],
        2 => [
            'html' => '<span class="badge light badge-info fw-bolder px-2 py-2">Randevu Zamanı</span>',
            'text' => 'Randevu Zamanı'
        ],
        3 => [
            'html' => '<span class="badge light badge-info fw-bolder px-2 py-2">Başladı</span>',
            'text' => 'Başladı'
        ],
        4 => [
            'html' => '<span class="badge light badge-success fw-bolder px-2 py-2">Abgeschlossen</span>',
            'text' => 'Abgeschlossen'
        ],
        5 => [
            'html' => '<span class="badge light badge-info fw-bolder px-2 py-2">Ödeme Bekleniyor</span>',
            'text' => 'Ödeme Bekleniyor'
        ],
        6 => [
            'html' => '<span class="badge badge-primary fw-bolder px-2 py-2">Ödeme Alındı</span>',
            'text' => 'Ödeme Alındı'
        ],
        7 => [
            'html' => '<span class="badge badge-success fw-bolder px-2 py-2">Ödeme Onaylandı</span>',
            'text' => 'Ödeme Onaylandı'
        ],
        8 => [
            'html' => '<span class="badge light badge-danger fw-bolder px-2 py-2">Storniert</span>',
            'text' => 'Storniert'
        ],

    ];
    public function status($type)
    {
        return self::STATUS_LIST[$this->status][$type] ?? null;
    }
    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }
    public function services()
    {
        return $this->hasMany(AppointmentServices::class, 'appointment_id', 'id');
    }

    public function business()
    {
        return $this->hasOne(Business::class, 'id', 'business_id');
    }
}
