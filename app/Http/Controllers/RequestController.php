<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $requests = Permohonan::Orderby('created_at','desc')->get();
        return    
        view('pages.daftarpengajuan',[ 'requests' => $requests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('depan.pengajuan');
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
            'judul' => 'required',
            'program' => 'required',
            'jenis_permohonan' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'email' => 'required|email',
            'no_telepon' => 'required',
            'jenis_bantuan' => 'required',
            'jumlah' => 'required',
            'nilai_asumsi' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required'

        ]);

        $pengajuan = new Permohonan;

        $pengajuan->judul = $request->judul ;
        $pengajuan->program = $request->program ;
        $pengajuan->jenis_permohonan = $request->jenis_permohonan ;
        $pengajuan->nama_perusahaan = $request->nama_perusahaan ;
        $pengajuan->alamat_perusahaan = $request->alamat_perusahaan ;
        $pengajuan->email = $request->email ;
        $pengajuan->no_telepon = $request->no_telepon ;
        $pengajuan->jenis_bantuan = $request->jenis_bantuan ;
        $pengajuan->jumlah = $request->jumlah ;
        $pengajuan->nilai_asumsi = $request->nilai_asumsi2 ;
        $pengajuan->tahun = $request->tahun ;
        $pengajuan->keterangan = $request->keterangan ;

        $pengajuan->save();
  

        return   redirect()->back()->with('status', 'Permohonan Berhasil Diajukan !!  Kami akan segera menghubungi anda kembali. Terima Kasih');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        //

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        //
    }
}
