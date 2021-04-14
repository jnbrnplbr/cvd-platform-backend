<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgencyResource extends JsonResource
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
            'id'    => $this->id,
            'name'  => $this->name,
            'description'   => $this->description,
            'slug'          => $this->slug,
            'department'    => $this->department->name,
            'created'       => $this->created_at->format('j F Y'),
            'updated'       => $this->updated_at->format('j F Y')
        ];
    
    }
}
