<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
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
          'business' => new BusinessResource($this->business),
          'date' => $this->services->first()->start_time,
          'status' => $this->status("text"),
          'comment_status' => $this->comment_status,
        ];
    }
}
