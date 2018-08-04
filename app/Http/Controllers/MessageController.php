<?php

namespace App\Http\Controllers;

use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $post = new Message();

        $post->subject = $request->input('subject');
        $post->content = $request->input('content');
        $post->created_at = Carbon::now()->toDateTimeString();

        $post->save();
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $subject = $request->input('subject');
        $content = $request->input('content');

        DB::table('messages')
            ->where('id', $id)
            ->update(['subject' => $subject, 'content' => $content]);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        DB::table('messages')->where('id', '=', $id)->delete();
    }
}
