<?php

use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('schedules')->insert([
            'training_id' => '1',
            'time' => '11/11/19 6:00 PM',
            'venue' => 'west trade center west avenue',
            'speaker' => 'John Doe'
        ]);
    }
}
