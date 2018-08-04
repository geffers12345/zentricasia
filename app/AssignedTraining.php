<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedTraining extends Model
{
    protected $fillable = ['training_id', 'trainor_id', 'created_at'];
}
