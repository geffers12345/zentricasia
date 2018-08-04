<?php

use Illuminate\Database\Seeder;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('resources')->insert([
            'title' => 'Android Tutorials',
            'description' => 'Taught by the author of Core Servlets and JSP, More Servlets and JSP and this Android tutorial Available at Servlets and JSP, and this Android tutorial. Available at public venues, or customized versions can be held on-site at yourorganization.',
            'attachment' => 'Android-Overview.pdf'
        ]);
    }
}
