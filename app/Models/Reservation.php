<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table ='reservations';
    protected $fillable = ['user_id', 'table_id', 'reservation_start', 'reservation_end', 'seats', 'active'];
    public function getDates()
    {
        return ['created_at', 'updated_at', 'reservation_start', 'reservation_end'];
    }
    public function user()
    {
        return $this->belongsTo('User');
    }
}
