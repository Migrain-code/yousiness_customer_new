<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacketUsageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'personel' => $this->personel->name,
            'created_at' => $this->created_at->format('d.m.Y H:i'),
            'amount' => $this->amount,
        ];
    }
}
