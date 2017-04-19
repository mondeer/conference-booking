<?php

namespace glado;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['hours_schedule', 'day_schedule', 'attendance', 'department', 'contact_person'];
}
