<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainorStudent extends Model
{
    protected $fillable = ['trainor_id', 'student_id', 'created_at'];
}
