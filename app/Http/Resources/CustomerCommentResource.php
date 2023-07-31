<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerCommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'content' => $this->content,
            'point' => $this->point,
            'created_at' => $this->created_at->format('d.m.Y'),
            'created_at_time' => $this->created_at->format('H:i'),
            'business'=> BusinessResource::make($this->business)
        ];
    }
}
