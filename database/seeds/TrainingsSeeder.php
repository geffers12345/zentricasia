<?php

use Illuminate\Database\Seeder;

class TrainingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('trainings')->insert([
            'title' => 'PHP - Procedural Programming',
            'description' => 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.',
            'attachment' => 'sharpener.png'
        ]);
    }
}
