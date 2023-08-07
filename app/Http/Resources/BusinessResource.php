<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BusinessResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
           'id' => $this->id,
           'name' => $this->name,
           'logo' => image($this->logo),
           'wallpaper' => image($this->wallpaper),
           'city' => new City($this->cities),
           'district' => new District($this->districts),
           'start_time' => $this->start_time,
            'point' => $this->comments->count(),
        ];
    }
}
