<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        DB::table('users')->insert([
            'name' => "Administrator",
            'email' => 'admintjsp@gmail.com',
            'password' => Hash::make('samarinda'),
        ]);

        for ($i=0; $i < 6; $i++) { 
            
             DB::table('posts')->insert([
            'judul' => "Menemukan Secercah Cahaya Dalam Gelap".$i,
            'sub_judul' => "Cahaya yang hilang dalam kehidupan yang telah lama berlalu".$i,
            'isi' => "Ini Isinya".$i,
            'url' => Str::slug("Menemukan Secercah Cahaya Dalam Gelap".$i,'-'),
            'image' => 'it_service/post-01.jpg',
            'penulis' => "Administrator",
        ]);
        }

       
    }
}
