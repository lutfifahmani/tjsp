@extends('layouts.app')

@section('content')
<!-- BOF Breadcrumb -->
             <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Perusahaan/Instansi</a></li>
                        <li class="breadcrumb-item active">Tambah Perusahaan</li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->
             <!-- BOF MAIN-BODY -->
            <div class="row">
                <div class="col">
                    <h1>Tambah Perusahaan/Instansi</h1>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <form method="POST" action="/add-perusahaan" enctype="multipart/form-data">
                 @method('POST')
                    @csrf

                <div class="form-group">
                    <label for="avatar">Logo Perusahaan</label>
                    <input id="avatar" type="file" name="avatar" class="form-control-file @error('avatar') is-invalid @enderror">

                    @error('avatar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    

                <div class="form-group">
                    <label for="nama_perusahaan">Nama Perusahaan/Instansi</label>
                    <input id="nama_perusahaan" type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror">

                    @error('nama_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    
                                
                <div class="form-group">
                    <label for="alamat_perusahaan">Alamat Perusahaan/Instansi</label>
                    <input rows="4" id="alamat_perusahaan" type="text" name="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror">

                    @error('alamat_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="npwp">NPWP</label>
                    <input rows="4" id="npwp" type="text" name="npwp" class="form-control @error('npwp') is-invalid @enderror">

                    @error('npwp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                </div>
                <div class="col">


                <div class="form-group">
                    <label for="email_perusahaan">Email</label>

                    <input id="email_perusahaan" type="email" name="email_perusahaan" class="form-control @error('email_perusahaan') is-invalid @enderror">

                    @error('email_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror        
                </div>

                <div class="form-group">
                    <label for="kontak_perusahaan">Kontak</label>

                    <input id="kontak_perusahaan" type="kontak" name="kontak_perusahaan" class="form-control @error('kontak_perusahaan') is-invalid @enderror">

                    @error('kontak_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror        
                </div>


                <div class="form-group">
                    <label for="keterangan">Keterangan</label>

                    <textarea id="keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"> </textarea> 

                    @error('keterangan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="form-group">
                 <input type="submit" class="btn btn-md btn-success btn-block" value="Tambah Perusahaan">
                 </div>

                </div>
            </div>
                 
                
    <!-- This container will become the editable. -->

                   
                </form>
                        
                        </div>
                
            </div>



                    <!-- EOF MAIN-BODY -->

@endsection
