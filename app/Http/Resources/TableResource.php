<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TableResource extends Resource
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
            'number' => $this->number,
            'seats' => $this->seats,
            'position' => $this->position,
            'description' => $this->description,
            'available' => $this->available,
            'image_url' => $this->image_url
        ];
    }
}