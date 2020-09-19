<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('pages')->insert([
            'page_name' => "profil",
            'title' => "Profil Forum TJSP Kota Samarinda",
            'content' => "TJSP Adalaha Bla Bla Bla",
        ]);
    }
}
