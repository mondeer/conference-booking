<?php

namespace glado;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_name', 'room_number', 'capacity'];
}
