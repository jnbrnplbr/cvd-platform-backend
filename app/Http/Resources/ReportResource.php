<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'title'         => $this->title,
            'description'   => $this->description,
            'status'        => $this->status,
            'agency'        => $this->agency_id,
            'report_by'     => $this->user_id,
            'created'       => $this->created_at->format('j F Y'),
            'updated'       => $this->updated_at->format('j F Y'),
        ];
    }
}
