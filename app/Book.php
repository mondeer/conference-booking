<?php

namespace glado;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['room_name', 'hours_schedule', 'day_schedule', 'department', 'contact_person_phone', 'contact_person_email'];
}
