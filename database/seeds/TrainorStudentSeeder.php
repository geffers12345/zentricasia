<?php

use Illuminate\Database\Seeder;

class TrainorStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('trainor_students')->insert([
            'trainor_id' => 1,
            'student_id' => 1,
            'created_at' => Carbon\Carbon::now()
        ]);
    }
}
