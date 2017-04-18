<?php

namespace glado;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['emp_name', 'email', 'pf', 'department', 'room'];
}
