<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->title,
            'description' => $this->description,
            'slug' => $this->slug,
            'created' => $this->created_at->format('j F Y'),
            'updated' => $this->updated_at->format('j F Y'),
        ];
    }
}
