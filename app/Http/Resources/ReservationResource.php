<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReservationResource extends Resource
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
//            'id' => $this->id,
//            'user_id' => $this->user_id,
//            'name' => UserResource::collection($this->name),
//            'table_id' => $this->table_id,
//            'reservation_start' => $this->reservation_start,
//            'reservation_end' => $this->reservation_end,
//            'seats' => $this->seats,
//            'active' => $this->active
            'id' => $this->id,
            'user_id' => $this->user_id,
//            'username' => $this->seats,
            'table_id' => $this->table_id,
//            'table_number' => new TableResource($this),
            'reservation_start' => $this->reservation_start,
            'reservation_end' => $this->reservation_end,
            'active' => $this->active
        ];
    }
}
