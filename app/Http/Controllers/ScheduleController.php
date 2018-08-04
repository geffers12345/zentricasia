<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        $post = new Schedule();

        $post->training_id = $request->input('id');
        $post->time = $request->input('time');
        $post->venue = $request->input('venue');
        $post->speaker = $request->input('speaker');

        $post->save();
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $tid = $request->input('tid');
        $time = $request->input('time');
        $venue = $request->input('venue');
        $speaker = $request->input('speaker');

        DB::table('schedules')
            ->where('id', $id)
            ->update(['training_id' => $tid, 'time' => $time, 'venue' => $venue, 'speaker' => $speaker]);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        DB::table('schedules')->where('id', '=', $id)->delete();
    }
}
