<?php

use Illuminate\Database\Seeder;

class TrainorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('trainors')->insert([
            'name' => 'James Dy',
            'email' => 'james@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('adrugaddict')
        ]);
    }
}
