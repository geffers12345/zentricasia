<?php

namespace App\Http\Controllers;

use App\TrainorStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainorStudentController extends Controller
{
    public function store(Request $request)
    {
        $post = new TrainorStudent();

        $post->student_id = $request->input('id');
        $post->trainor_id = $request->input('trainor_id');
        $post->created_at = Carbon::now();

        $post->save();
    }
}
