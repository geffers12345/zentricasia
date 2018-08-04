<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'jdoe@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('notadrugaddict'),
            'role_id' => 1,
            'is_active' => 1,
            'created_at' => Carbon\Carbon::now()
        ]);
    }
}
