<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerNotificationPermissionsResource extends JsonResource
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
           'is_sms' => $this->is_sms == 1 ? true : false,
           'is_email' => $this->is_email == 1 ? true : false,
           'is_notification' => $this->is_notification == 1 ? true : false,
        ];
    }
}
