@extends('layouts.app')

@section('content')



            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Perusahaan</a></li>
                        <li class="breadcrumb-item active">Daftar Perusahaan</li>
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
            <!-- BOF MAIN-BODY -->
              <!-- BOF Basic Datatable -->
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption uppercase">
                                <i class="ti-briefcase"></i> Daftar Perusahaan
                            </div>
                            <div class="tools">
                                <a href="{{url('tambah-perusahaan')}}" class="btn btn-md btn-primary"><i class="ti-write"></i> Tambah</a>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover init-datatable" id="table_id">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Logo Perusahan</th>
                                            <th>Nama Perusahan</th>
                                            <th>Alamat Perusahaan</th>
                                            <th>NPWP</th>
                                            <th>Email</th>
                                            <th>Kontak</th>
                                            <th>Keterangan</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perusahaan as $dp)

                                        <tr>

                                            <td><img src="{{ asset('images/'.$dp->avatar) }}" width="100px"></td>
                                            <td>{{$dp->nama_perusahaan}}</td>
                                            <td>{{$dp->alamat_perusahaan}}</td>
                                            <td>{{$dp->npwp}}</td>
                                            <td>{{$dp->email_perusahaan}}</td>          
                                            <td>{{$dp->kontak_perusahaan}}</td>
                                            <td>{{$dp->keterangan}}</td>
                                            <td style="width:12%"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal{{$dp->id}}"><i class="ti ti-pencil-alt"></i></button> <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus{{$dp->id}}"><i class="ti ti-trash"></i></button></td>
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
  @foreach ($perusahaan as $dpm)
            <div class="modal fade" id="modal{{$dpm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Perubahan Data </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- FORM -->
             <!-- This container will become the editable. -->
            <form method="POST" action="/update-perusahaan/{{$dpm->id}}" enctype="multipart/form-data">
                 @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col">
                        <figure class="figure">
                          <img src="{{ asset('images/'.$dpm->avatar) }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                            
                       
                        </div>
                        <div class="col">
                        <label>Ubah Logo</label>
                         <div class="form-group">
                        <input id="{{$dpm->id}}avatar" type="file" name="avatar" class="form-control-file @error('avatar') is-invalid @enderror">
                        @error('avatar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        </div>
                    </div>
               

                  <label for="nama_perusahaan">Nama Perusahaan</label>

                    <input id="{{$dpm->id}}nama_perusahaan" type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" value="{{$dpm->nama_perusahaan}}">

                    @error('nama_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <label for="alamat_perusahaan">alamat Perusahaan</label>

                    <input id="{{$dpm->id}}alamat_perusahaan" type="text" name="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror" value="{{$dpm->alamat_perusahaan}}">

                    @error('alamat_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <label for="email_perusahaan">email Perusahaan</label>

                    <input id="{{$dpm->id}}email_perusahaan" type="text" name="email_perusahaan" class="form-control @error('email_perusahaan') is-invalid @enderror" value="{{$dpm->email_perusahaan}}">

                    @error('email_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <label for="npwp">NPWP</label>

                    <input id="{{$dpm->id}}npwp" type="text" name="npwp" class="form-control @error('npwp') is-invalid @enderror" value="{{$dpm->npwp}}">

                    @error('npwp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <label for="kontak_perusahaan">kontak Perusahaan</label>

                    <input id="{{$dpm->id}}kontak_perusahaan" type="text" name="kontak_perusahaan" class="form-control @error('kontak_perusahaan') is-invalid @enderror" value="{{$dpm->kontak_perusahaan}}">

                    @error('kontak_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <label for="keterangan">Keterangan</label>

                    <input id="{{$dpm->id}}keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{$dpm->keterangan}}">

                    @error('keterangan')
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
  @foreach ($perusahaan as $dpm)
            <div class="modal fade" id="hapus{{$dpm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <!-- FORM -->
                            <p>Apakah anda yakin akan menghapus data perusahaan</br> <b>{{$dpm->nama_perusahaan}}</b></p>
                            <!-- This container will become the editable. -->
            <form method="POST" action="/hapus-perusahaan/{{$dpm->id}}">
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
@endforeach

<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable({
    "order": []
});
} );
</script>

    @endsection