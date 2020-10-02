<?php

namespace App\Http\Controllers;

use App\Report;
use App\Gallery;
use Illuminate\Http\Request;
use App\Perusahaan;

class ReportController extends Controller
{



      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
        $reports = Report::with('perusahaannya')->Orderby('tanggal','desc')->get();
        $perusahaan = Perusahaan::Orderby('updated_at','desc')->get();
        return    
        view('laporan.daftarlaporan',[ 'reports' => $reports,'perusahaan'=>$perusahaan]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

     $perusahaan = Perusahaan::all();
    
        return view('laporan.buatlaporan',[ 'perusahaan' => $perusahaan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       $request->validate([
            'tanggal' => 'required',
            'id_perusahaan' => 'required',
            'sektor' => 'required',
            'kontribusi' => 'required',
            'jumlah' => 'required',
            'tujuan' => 'required',
            'lokasi' => 'required'

        ]);

   

        $report = new Report;

        $report->tanggal = $request->tanggal;
        $report->judul = $request->judul;
        $report->id_perusahaan = $request->id_perusahaan;
        $report->sektor = $request->sektor;
        $report->sub_sektor = $request->sub_sektor;
        $report->kontribusi = $request->kontribusi;
        $report->jumlah = $request->jumlah;
        $report->nominal = $request->nominal;
        $report->tujuan = $request->tujuan;
        $report->latling = $request->latling;
        $report->lokasi = $request->lokasi;

        $report->save();
  
        if($request->hasfile('gallery'))
         {
            foreach($request->file('gallery') as $file)
            {
                $path = $file->store('gallery');
                 $files = new Gallery();
                 $files->id_laporan=$report->id;
                 $files->url=$path;
                 $files->save();
            }

        return   redirect('list-laporan')->with('status', 'Berhasil Tambah Laporan !!');
         } else {

             return   redirect('list-laporan')->with('status', 'Laporan Gagal');
         }

        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
         $request->validate([
            'tanggal' => 'required',
            'id_perusahaan' => 'required',
            'sektor' => 'required',
            'kontribusi' => 'required',
            'jumlah' => 'required',
            'tujuan' => 'required',
            'lokasi' => 'required'

        ]);

     $report = Report::find($id);

        $report->tanggal = $request->tanggal;
        $report->judul = $request->judul;
        $report->id_perusahaan = $request->id_perusahaan;
        $report->sektor = $request->sektor;
        $report->kontribusi = $request->kontribusi;
        $report->jumlah = $request->jumlah;
        $report->nominal = $request->nominal;
        $report->tujuan = $request->tujuan;
        $report->lokasi = $request->lokasi;
        $report->latling = $request->latling;

        $report->save();
  
        if($request->hasfile('gallery'))
         {
            foreach($request->file('gallery') as $file)
            {
                $path = $file->store('gallery');
                 $files = new Gallery();
                 $files->id_laporan=$report->id;
                 $files->url=$path;
                 $files->save();
            }

        return   redirect('list-laporan')->with('status', 'Berhasil Update Laporan !!');
         } else {

             return   redirect('list-laporan')->with('status', 'Berhasil Update Laporan !!');
         }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $hapuslap = Report::find($id);

        $hapusgal = Gallery::where('id_laporan', $id);
        $hapusgal->delete();

        $hapuslap->delete();


        return redirect('list-laporan')->with('status', 'Laporan Telah dihapus!');
    }
}
