<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogGetResource extends JsonResource
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
            "id" => $this->id,
            'title' => $this->title,
            'image' => image($this->image),
            'content' => $this->description,
            'created_at' => $this->created_at->format('d.m.Y'),
            'comments' => BlogCommentResource::collection($this->comments),
        ];
    }
}
