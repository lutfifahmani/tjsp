<?php

namespace App\Http\Controllers;

use App\Report;
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

    public function perusahaandepan()
    {
        //
         //
        $reports = Report::with('perusahaannya')->get();
        $perusahaan = Perusahaan::all();
        return    
        view('depan.daftarperusahaan',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
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

}
