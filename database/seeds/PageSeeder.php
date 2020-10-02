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

        for ($i=1; $i < 7; $i++) { 
            
             DB::table('posts')->insert([
            'judul' => "Realisasi Kegiatan TJSP Kota Samrinda Bagian ".$i,
            'sub_judul' => "Setelah pada sebelumnya diadakan pertemuan dengan Pihak Bappeda Samarinda Bagian ".$i,
            'isi' => "Samarinda, pada hari minggu bulan ini, jatuh pada tanggal 25 September 2020".$i,
            'url' => Str::slug("Realisasi Kegiatan TJSP Kota Samrinda Bagian ".$i,'-'),
            'image' => 'logo/'.$i.'.png',
            'penulis' => "Administrator",
        ]);

              DB::table('companies')->insert([
                
                'avatar' => "logo/".$i.".png",
                'nama_perusahaan' => "PT Nomor ".$i,
                'npwp' => "8801 232324 2423 000 ".$i,
                'alamat_perusahaan' => "Jalan Juanda ".$i,
                'email_perusahaan' => "emailku".$i."@gmail.com",
                'kontak_perusahaan' => "0541 ".$i."532433",
                'status_kontribusi' => "true",
                'keterangan' => "Perusahaan di Samarinda",

        ]);

                DB::table('requests')->insert([
                
                'judul' => "Permohonan Bantuan Alat Pemadam Kebakaran ".$i,
                'program' => "Prasarana Wilayah",
                'jenis_permohonan' => "Permohonan Masyarakat",
                'nama_perusahaan' => "Abdul Salam 2",
                'alamat_perusahaan' => "Jalan Mugirejo RT 32",
                'email' => "abdulsama@gmail.com",
                'no_telepon' => "082153918371",
                'jenis_bantuan' => "Alat Pemadam Kebakaran",
                'jumlah' => "1 Unit",
                'nilai_asumsi' => "2800000",
                'tahun' => "2020",
                'keterangan' => "Permohon Dikirimkan Melalui POS",

            ]);


            DB::table('reports')->insert([
                
                'judul' => "Permohonan Bantuan Alat Pemadam Kebakaran ".$i,
                'tanggal' => "2020-07-1".$i."",
                'id_perusahaan' => $i,
                'sektor' => "Ekonomi",
                'kontribusi' => "Nasi Bungkus",
                'jumlah' => $i."00 Bungkus",
                'nominal' => $i."000000",
                'tujuan' => "Penyapu Jalanan",
                'lokasi' => "Jalan Bayangkara Samarinda",

            ]);


        }

       
    }
}
