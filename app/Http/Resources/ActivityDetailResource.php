<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActivityDetailResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'image' => image($this->image),
            'video' => $this->embed,
            'end_time' => $this->stop_date->format('d.m.Y'),
            'start_time' => $this->start_date->format('d.m.Y'),
            'phone' => $this->phone,
            'clock' => $this->start_date->format('H:i'). " - " .$this->stop_date->format('H:i'),
            'hotel' => $this->hotel,
            'city' => City::make($this->citys),
            'personals' => ActivityPersonelsResource::collection($this->personels),
            'sponsors' => $this->sponsors,
            'sliders' => ActivitySliderResource::collection($this->sliders),
            'personalCount'=> $this->personels->count(),
            'sponsorCount' => $this->sponsors->count(),
        ];
    }
}
