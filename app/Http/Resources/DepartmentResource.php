<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'description'   => $this->description,
            'slug'          => $this->slug,
            'category'      => $this->category_id,
            'created'       => $this->created_at->format('j F Y'),
            'updated'       => $this->updated_at->format('j F Y'),
            'agencies'      => AgencyResource::collection($this->agency)
        ];
    }
}
