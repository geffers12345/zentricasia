<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(TrainingsSeeder::class);
        $this->call(ResourcesSeeder::class);
        $this->call(SchedulesSeeder::class);
        $this->call(MessagesSeeder::class);
        $this->call(AssignTrainingSeeder::class);
        $this->call(TrainorSeeder::class);
        $this->call(TrainorStudentSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
