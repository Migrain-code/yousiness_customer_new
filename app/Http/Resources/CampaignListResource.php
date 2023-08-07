<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class CampaignListResource extends JsonResource
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
           'business' => BusinessResource::make($this->business),
           'title' => $this->title,
           'description' => $this->description,
           'code' => $this->code,
           'discount' => $this->discount,
           'start_time' => Carbon::parse($this->start_time)->format('d.m.Y H:i'),
           'end_time' => Carbon::parse($this->end_date)->format('d.m.Y H:i'),
        ];
    }
}
