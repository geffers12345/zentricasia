<?php

namespace App\Http\Controllers;

use App\AssignedTraining;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AssignedTrainingController extends Controller
{
    public function store(Request $request)
    {
        $post = new AssignedTraining();

        $post->training_id = $request->input('id');
        $post->trainor_id = $request->input('trainor_id');
        $post->created_at = Carbon::now();

        $post->save();
    }
}
