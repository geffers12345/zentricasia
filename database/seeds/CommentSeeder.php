<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('comments')->insert([
            'email' => 'jsnow@gmail.com',
            'comment' => 'Some Comment'
        ]);
    }
}
