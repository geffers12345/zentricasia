<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $post = new Comment();

        $post->email = $request->input('email');
        $post->comment = $request->input('comment');
        $post->created_at = Carbon::now()->toDateTimeString();

        $post->save();
    }
}
