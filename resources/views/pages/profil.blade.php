@extends('layouts.app')

@section('content')
<!-- BOF Breadcrumb -->
             <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Profil TJSP</a></li>
                        <li class="breadcrumb-item active">Update</li>
                    </ol>
                </div>
            </div>

            @if ($status = Session::get('status'))
            <!-- EOF Breadcrumb -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{$status}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <!-- EOF Breadcrumb -->
             <!-- BOF MAIN-BODY -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Update Profil</h1>
@foreach ($pages as $page)
    <!-- The toolbar will be rendered in this container. -->
    
<form method="POST" action="/update-profilnya">
                 @method('POST')
                    @csrf

                    
    <!-- This container will become the editable. -->
         <label for="judul">Judul</label>

                    <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$page->title}}">

                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

          </br>
            <textarea name="content" id="summernote">
                {{$page->content}}
            </textarea>
       </br>
            <input type="submit" value="Update Profil" class="btn btn-lg btn-block btn-success">
                </form>
 @endforeach
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 800,
        });
    });
  </script>
                </div>
                
            </div>
            <!-- EOF MAIN-BODY -->

@endsection
