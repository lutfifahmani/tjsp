@extends('layouts.app')

@section('content')
<!-- BOF Breadcrumb -->
             <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Berita</a></li>
                        <li class="breadcrumb-item active">Tambah Berita</li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->
             <!-- BOF MAIN-BODY -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Buat Berita</h1>

    <!-- The toolbar will be rendered in this container. -->
    
<form method="POST" action="/add-berita">
                 @method('POST')
                    @csrf
    <!-- This container will become the editable. -->
         <label for="judul">Judul Berita</label>

                    <input id="judul" type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">

                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

          </br>
            <textarea name="isi" id="summernote">
                <p>Isi Berita Disini . . .</p>
            </textarea>

            <br>
            <input type="submit" value="Buat Berita" class="btn btn-lg btn-block btn-success">
                </form>

  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
        });
    });
  </script>
                </div>
                
            </div>
            <!-- EOF MAIN-BODY -->

@endsection
