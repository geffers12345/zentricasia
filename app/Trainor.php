<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainor extends Model
{
    protected $fillable = ['name', 'email', 'password', 'created_at'];
}
