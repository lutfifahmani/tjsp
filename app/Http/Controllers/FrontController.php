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
        $reports = Report::with('perusahaannya')->get();
        $perusahaan = Perusahaan::all();
        return    
        view('depan.laporan',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
    }

     public function home()
    {
        //
         //
        $reports = Report::with('perusahaannya')->get();
        $perusahaan = Perusahaan::all();
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12);
        $posts = Berita::orderBy('created_at', 'desc')->limit(4)->get();
        $posts2 = $posts->shift();

        return    
        view('welcome',[ 'reports' => $reports,'perusahaan'=>$perusahaan,'posts'=>$posts,'galleries'=>$galleries,'posts2'=>$posts2]);
    }

    public function perusahaandepan()
    {
        //
         //
        $reports = Report::with('perusahaannya')->orderBy('created_at', 'desc')->get();
        $perusahaan = Perusahaan::all();
        return    
        view('depan.daftarperusahaan',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
    }

   public function profil()
    {
         // Tambah Berita
         $pages = Pages::where('page_name','profil')->get();
        return view('depan.profildepan',[ 'pages' => $pages]);

    }


    public function laporandepan($sektor,$sub_sektor)
    {
        //

        $newsektor = str_replace('-', ' ', $sektor);
        $newsubsektor = str_replace('-', ' ', $sub_sektor);
         //
        $requests = Permohonan::where([
                    ['program', '=', $newsubsektor],
                    ['jenis_permohonan', '=', $newsektor]])
                    ->orderBy('created_at', 'desc')->get();
        $perusahaan = Perusahaan::all();
        return    
        view('depan.pengajuansektor',[ 'requests' => $requests,'perusahaan'=>$perusahaan,'sektor'=>$newsubsektor,'sub_sektor'=>$newsektor]);
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
        $posts = Berita::orderBy('created_at', 'desc')->paginate(9);
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
