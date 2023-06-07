<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacketResource extends JsonResource
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
            'business' => new BusinessResource($this->business),
            'remaining' => $this->amount - $this->usages()->sum('amount'),
            'total' => $this->total,
            'type' => $this->type == 0 ? "Seans" : "Dakika",
            'created_at' => $this->created_at->format('d.m.Y H:i:s'),
        ];
    }
}
