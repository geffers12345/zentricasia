<?php

use Illuminate\Database\Seeder;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('messages')->insert([
            'subject' => 'Sprint Planning',
            'content' => 'Taught by the author of Core Servlets and JSP, More Servlets and JSP and this Android tutorial Available at Servlets and JSP, and this Android tutorial. Available at public venues, or customized versions can be held on-site at yourorganization.',
            'created_at' => Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
