<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BusinessDetailResource extends JsonResource
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
            'city' => new City($this->cities),
            'district' => new District($this->districts),
            'start_time' => $this->start_time,
            'category' => $this->category->name,
            'about' => $this->about,
            'phone' => $this->phone,
            'address' => $this->address,
            'comments' => BusinessCommentResource::collection($this->comments),
            'personals' => PersonelResource::collection($this->personel),
            'gallery' => BusinessGalleryResource::collection($this->gallery),
            'services' => BusinessServiceResource::collection($this->services),
            'point' => $this->points(),
        ];
    }
}
