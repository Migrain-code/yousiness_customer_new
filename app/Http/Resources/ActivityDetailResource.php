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
            'description' => strip_tags($this->description),
            'image' => image($this->image),
            'start_time' => $this->start_date->format('d.m.Y H:i'),
            'end_time' => $this->stop_date->format('d.m.Y H:i'),
            'personals' => PersonelResource::collection($this->personels),
            'sponsors' => $this->sponsors,
            'personalCount'=> $this->personels->count(),
            'sponsorCount' => $this->sponsors->count(),
        ];
    }
}
