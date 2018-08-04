<?php

use Illuminate\Database\Seeder;

class AssignTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('assigned_trainings')->insert([
            'training_id' => 1,
            'trainor_id' => 1,
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
