<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['training_id', 'time', 'venue', 'speaker'];
}
