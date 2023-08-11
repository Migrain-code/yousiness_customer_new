<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

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
            'wallpaper' => image($this->wallpaper),
            'city' => new City($this->cities),
            'district' => new District($this->districts),
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'category' => $this->category->name,
            'about' => $this->about,
            'phone' => $this->phone,
            'type' => $this->type_id,
            'address' => $this->address,
            'sliders' => BusinessSliderResource::collection($this->sliders),
            'comments' => BusinessCommentResource::collection($this->comments),
            'personals' => PersonelResource::collection($this->personel),
            'gallery' => BusinessGalleryResource::collection($this->gallery),
            'services' => BusinessServiceResource::collection($this->services),
            'closed_day' =>Carbon::now()->startOfWeek()->addDays($this->off_day - 1)->dayName,
            'point' => $this->points(),
        ];
    }
}
