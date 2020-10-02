@extends('layouts.app')

@section('content')



            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">Berita</li>
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
              <!-- BOF Basic Datatable -->
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption uppercase">
                                <i class="ti-briefcase"></i> Daftar Berita
                            </div>
                            <div class="tools">
                                <a href="{{url('tambah-berita')}}" class="btn btn-md btn-primary"><i class="ti-write"></i> Buat Berita</a>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover init-datatable" id="table_id">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width:50%">Judul</th>
                                            <th style="width:20%">Author</th>
                                            <th style="width:20%">Tanggal</th>
                                            <th style="width:10%">Kelola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $dp)

                                        <tr>
                                            <td style="width:55%">{{$dp->judul}}</td>
                                            <td style="width:15%">{{$dp->penulis}}</td>
                                            <td style="width:18%">{{$dp->updated_at}}</td>
                                            <td style="width:12%">
                                                <a href="berita/{{$dp->url}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Lihat Berita" class="btn btn-sm btn-dark"><i class="ti-eye"></i></a>
                                                <span data-toggle="modal" data-target="#modal{{$dp->id}}">
                                                 <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Berita" ><i class="ti-pencil-alt"></i></button> </span>
                                                 <span data-toggle="modal" data-target="#hapus{{$dp->id}}"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Berita"><i class="ti-trash"></i></button></span></td>
                                        </tr>

                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF Basic Datatable -->
            <!-- EOF MAIN-BODY -->

  <!-- BOF MODALS -->
  @foreach ($posts as $dpm)
            <div class="modal fade" id="modal{{$dpm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Berita </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- FORM -->

                            <!-- This container will become the editable. -->
            <form method="POST" action="/update-berita/{{$dpm->id}}" enctype="multipart/form-data">
                 @method('POST')
                    @csrf

                  <label for="judul">Judul Berita</label>

                    <input id="judul" type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{$dpm->judul}}">

                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for="sub_judul">Sub Judul </label>

                    <input id="sub_judul" type="text" name="sub_judul" class="form-control @error('sub_judul') is-invalid @enderror" value="{{$dpm->sub_judul}}">

                    @error('sub_judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
         <div class="form-row">
                    <div class="col-md-4">
                      <label for="image">Ganti Gambar Header</label>
                    <input id="image" type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">

                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-md-3">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck" name="slide" value="slider" @if($dpm->slide) checked @endif>
                          <label class="form-check-label" for="gridCheck">
                            Jadikan Slide
                          </label>
                        </div>
                    </div>
                     <div class="col-md-3">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck" name="state" value="hidden" @if($dpm->state) checked @endif>
                          <label class="form-check-label" for="gridCheck">
                            Sembunyikan dari Berita
                          </label>
                        </div>
                    </div>
                  </div>
                  <br>
                <div class="form-group">
                <img src="{{asset('/images/'.$dpm->image)}}" class="img-fluid" width="150px">
                    </div>

                  </br>
                    <textarea id="summernote{{$dpm->id}}" type="text" name="isi" class="form-control @error('isi') is-invalid @enderror">{{$dpm->isi}}</textarea>


                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

            

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>

                </form>
                    </div>
                </div>
            </div>
@endforeach

<!-- BOF MODALS -->
  @foreach ($posts as $dpm)
            <div class="modal fade" id="hapus{{$dpm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <!-- FORM -->
                            <p>Apakah anda yakin akan menghapus berita</br></p>
                            <!-- This container will become the editable. -->
            <form method="POST" action="/hapus-berita/{{$dpm->id}}">
                 @method('DELETE')
                    @csrf
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-outline-primary">Yakin</button>
                        </div>

                </form>
                    </div>
                </div>
            </div>

             <script>
    $(document).ready(function() {
        $('#summernote{{$dpm->id}}').summernote({
            height: 200,
        });
    });
  </script>
@endforeach

<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable({
    "order": []
});
} );
</script>

 <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
        });
    });
  </script>

  <script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>

@toastr_render
    @endsection