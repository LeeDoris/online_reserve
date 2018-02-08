<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['number', 'seats', 'position', 'description', 'reserved', 'available', 'image_url'];
}