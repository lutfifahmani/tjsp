<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;


class PerusahaanController extends Controller
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
        $perusahaan = Perusahaan::Orderby('updated_at','desc')->get();
        return view('perusahaan.listperusahaan',[ 'perusahaan' => $perusahaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('perusahaan.tambahperusahaan');
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
            'nama_perusahaan' => 'required',
            'avatar' => 'required|file|max:512',
            'alamat_perusahaan' => 'required',
            'email_perusahaan' => 'required|email',
            'kontak_perusahaan' => 'required'

        ]);


        $path = $request->file('avatar')->store('logo');

        $perusahaan = new Perusahaan;

        $perusahaan->nama_perusahaan = $request->nama_perusahaan;
        $perusahaan->avatar = $path;
        $perusahaan->alamat_perusahaan = $request->alamat_perusahaan;
        $perusahaan->npwp = $request->npwp;
        $perusahaan->email_perusahaan = $request->email_perusahaan;
        $perusahaan->kontak_perusahaan = $request->kontak_perusahaan;
        $perusahaan->status_kontribusi = "";
        $perusahaan->keterangan = $request->keterangan;

        $perusahaan->save();

        $perusahaan = Perusahaan::all();

        return redirect('list-perusahaan')->with('status', 'Data Perusahaan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

         $request->validate([
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'email_perusahaan' => 'required|email',
            'kontak_perusahaan' => 'required'

        ]);
        

        $ubah = Perusahaan::find($id);

        $ubah->nama_perusahaan= $request->nama_perusahaan;
        $ubah->alamat_perusahaan = $request->alamat_perusahaan;
        $ubah->npwp = $request->npwp;
        $ubah->email_perusahaan = $request->email_perusahaan;
        $ubah->kontak_perusahaan = $request->kontak_perusahaan;
        $ubah->status_kontribusi = "";
        $ubah->keterangan = $request->keterangan;

        if ($request->hasFile('avatar')) {
            //
            $path = $request->file('avatar')->store('logo');
            $ubah->avatar = $path;
        } else {

            echo "no Image added";
        }
 

        $ubah->save();

        $perusahaan = Perusahaan::all();

        toastr()->success('Data has been saved successfully!');

        return redirect('list-perusahaan')->with('status', 'Data Perusahaan berhasil diubah!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $flight = Perusahaan::find($id);

        $flight->delete();

        $perusahaan = Perusahaan::all();

        return redirect('list-perusahaan')->with('status', 'Data Perusahaan berhasil dihapus!');

    }
}
