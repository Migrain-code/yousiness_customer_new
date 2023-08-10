<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class Customer extends JsonResource
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
           'name'=> $this->name,
           'phone' => $this->email,
           'city' => City::make($this->city),
           'district' => District::make($this->district),
           'gender' => $this->gender,
           'image' => storage($this->image),
           'birthday' => Carbon::parse($this->birthday)->format('d.m.Y'),
           'created_at'=> $this->created_at->format('d.m.Y')
        ];
    }
}
