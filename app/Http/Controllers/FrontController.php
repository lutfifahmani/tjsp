<?php

namespace App\Http\Controllers;

use App\Report;
use App\Pages;
use App\Permohonan;
use App\Berita;
use App\Gallery;
use Illuminate\Http\Request;
use App\Perusahaan;

class FrontController extends Controller
{
    //

     public function indexdepan()
    {
        //
         //
        $reports = Report::with('perusahaannya')->Orderby('tanggal','desc')->get();
        $perusahaan = Perusahaan::Orderby('updated_at','desc')->get();
        return    
        view('depan.laporan',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
    }

     public function home()
    {
        //
         //
        $reports = Report::with('perusahaannya')->Orderby('tanggal','desc')->get();
        $perusahaan = Perusahaan::Orderby('updated_at','desc')->get();
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12);
        $slideposts = Berita::where('slide','slider')->orderBy('created_at', 'desc')->limit(4)->get();
        $slideposts2 = $slideposts->shift();
         $posts = Berita::where('state',null)->orderBy('created_at', 'desc')->limit(3)->get();
        $requests = Permohonan::all();

        return    
        view('welcome',[ 'reports' => $reports,'perusahaan'=>$perusahaan,'slideposts'=>$slideposts,'slideposts2'=>$slideposts2,'galleries'=>$galleries,'posts'=>$posts,'requests'=>$requests]);
    }

    public function perusahaandepan()
    {
        //
         //
        $reports = Report::with('perusahaannya')->orderBy('created_at', 'desc')->get();
        $perusahaan = Perusahaan::Orderby('updated_at','desc')->get();
        return    
        view('depan.daftarperusahaan',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
    }

   public function profil()
    {
         // Tambah Berita
         $pages = Pages::where('page_name','profil')->get();
        return view('depan.profildepan',[ 'pages' => $pages]);

    }


    public function laporandepan($program,$pemohon)
    {
        //

        $newprogram = str_replace('-', ' ', $program);
        $newpemohon = str_replace('-', ' ', $pemohon);
         //
        $requests = Permohonan::where([
                    ['program', '=', $newprogram],
                    ['jenis_permohonan', '=', $newpemohon]])
                    ->orderBy('created_at', 'desc')->get();
        $perusahaan = Perusahaan::all();
        return    
        view('depan.pengajuansektor',[ 'requests' => $requests,'perusahaan'=>$perusahaan,'program'=>$newprogram,'pemohon'=>$newpemohon]);
    }

    public function galeridepan()
    {
        //
         //
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12);
        return    
        view('depan.galleri',[ 'galleries' => $galleries]);
    }

    public function beritadepan()
    {
        //
         //
        $posts = Berita::where('state',null)->orderBy('created_at', 'desc')->paginate(9);
        return    
        view('depan.mainberita',[ 'posts' => $posts]);
    }

    public function perusahaansatu($id)
    {
        //
         //
        $reports = Report::with('perusahaannya')->get();
        $perusahaan = Perusahaan::find($id);
        return    
        view('depan.detailper',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
    }

    public function laporansatu($id)
    {
        //
         //
        $reports = Report::find($id);
        $perusahaan = Perusahaan::find($id);
        return    
        view('depan.detaillap',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
    }

    public function beritasatu($slug)
    {
        //

        $posts = Berita::where('url', $slug)->first();

        $posts1 = Berita::whereNotIn('url', [$slug])->orderBy('created_at', 'desc')->get();


        return view('depan.singleberita')->with([ 'posts' => $posts,'posts1' => $posts1]);
    }

}
