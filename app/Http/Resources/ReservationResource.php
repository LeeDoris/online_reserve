<?php

namespace App\Http\Resources;

use App\Models\Table;
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
        Resource::withoutWrapping();
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
