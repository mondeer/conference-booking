<?php

namespace glado;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['emp_name', 'email', 'pf', 'department', 'room'];
}
