<?php

namespace App\Http\Controllers;

use App\Trainor;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TrainorController extends Controller
{
    public function store(Request $request)
    {
        $post = new User();

        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->password = Hash::make($request->input('password'));
        $post->role_id = 3;
        $post->is_active = 1;
        $post->created_at = Carbon::now();

        $post->save();
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $updated_at = Carbon::now();

        DB::table('users')
            ->where('id', $id)
            ->update(['name' => $name, 'email' => $email, 'password' => $password, 'updated_at' => $updated_at]);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        DB::table('users')->where('id', '=', $id)->delete();
    }
}
