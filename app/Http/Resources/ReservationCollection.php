<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ReservationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'user_id' => (string) $this->user_id,
            'table_id' => (string) $this->table_id,
            'table_number' => (string) Table::find($this->table_id)->number,
            'reservation_start' => (string) $this->reservation_start,
            'reservation_end' => (string) $this->reservation_end,
            'active' => (string) $this->active
        ];
    }
}
