@extends('layouts.app')

@section('content')
<!-- BOF Breadcrumb -->
             <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Laporan</a></li>
                        <li class="breadcrumb-item active">Buat Laporan</li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->
             <!-- BOF MAIN-BODY -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Buat Laporan</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- This container will become the editable. -->
            <form method="POST" action="/add-laporan" enctype="multipart/form-data">
                 @method('POST')
                    @csrf
                <label for="tanggal">Tanggal Kegiatan</label>
                    <input id="tanggal" type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                    @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for="judul">Judul Kegiatan</label>
                    <input id="judul" type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                 <label for="sektor">Program</label>
                    <select name="sektor" class="form-control">
                        
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Sosial Budaya">Sosial Budaya</option>
                        <option value="Prasarana Wilayah">Prasarana Wilayah</option>
                      
                    </select>

                    <label for="id_perusahaan">Perusahaan/Instansi</label>
                    <select name="id_perusahaan" class="form-control">
                        @foreach ($perusahaan as $pr)
                        <option value="{{$pr->id}}">{{$pr->nama_perusahaan}}</option>
                        @endforeach
                    </select>

               <!--  <label for="sub_sektor">Sub Sektor</label>
                 <select name="sub_sektor" class="form-control">
                    <option value="Sosial Budaya">Sosial Budaya</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Prasarana Wilayah">Prasarana Wilayah</option>
                </select> -->
                </div>

                <div class="col-md-4">
                    

                    <label for="kontribusi">Kontribusi</label>
                    <input id="kontribusi" type="text" name="kontribusi" class="form-control @error('kontribusi') is-invalid @enderror">
                    @error('kontribusi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="jumlah">Jumlah Kontribusi</label>
                    <input id="jumlah" type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                    @error('jumlah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="nominal">Nominal</label>
                    <input id="nominal" type="text" name="nominalx" class="form-control @error('nominal') is-invalid @enderror money" autocomplete="off">
                    @error('nominal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="hidden" name="nominal" class="form-control @error('nominal') is-invalid @enderror aslinya" autocomplete="off">

                    <label for="tujuan">Tujuan atau Penerima</label>
                    <input id="tujuan" type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror">
                    @error('tujuan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    

                    <label for="lokasi">Lokasi Kegiatan</label>
                    <input id="lokasi" type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror">
                    @error('lokasi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="lat">LatLing (untuk map) <a href="https://www.google.com/maps/place/Samarinda+kota" id="linknya" target="_blank">Cari</a></label>

                    <input id="lat" type="text" name="latling" class="form-control @error('lat') is-invalid @enderror" placeholder="xxxx,xxxx">
                    @error('lat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <label for="file">Dokumentasi</label>
                    <input id="file" type="file" name="gallery[]" class="form-control-file @error('gallery') is-invalid @enderror" multiple="true">
                    @error('gallery')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </br>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Buat Laporan">
                    </div>
              </form>
                </div>
            </div>
<script type="text/javascript">
    $('#lokasi').change(function () {
            // Display a success toast, with a title
            $("#linknya").attr("href", "https://www.google.com/maps/place/"+$('#lokasi').val());
        });

    

</script>


                    <!-- EOF MAIN-BODY -->

@endsection
