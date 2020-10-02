@extends('layouts.app')

@section('content')



            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Laporan</a></li>
                        <li class="breadcrumb-item active">Daftar Laporan</li>
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
                                <i class="ti-briefcase"></i> Daftar Laporan
                            </div>
                            <div class="tools">
                                <a href="{{url('tambah-laporan')}}" class="btn btn-md btn-primary"><i class="ti-write"></i> Tambah</a>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover init-datatable" id="table_id">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Judul</th>
                                            <th>Nama Perusahan</th>
                                            <th>Sektor</th>
                                            <th>Jenis Kontribusi</th>
                                            <th>Jumlah (Unit)</th>
                                            <th>Nominal</th>
                                            <th>Tujuan/ Penerima</th>
                                            <th>Lokasi</th>
                                            <th>LatLing</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $dp)

                                        <tr>
                                            <td style="width: 10%">{{$dp->tanggal->format('d-m-Y')}}</td>
                                            <td>{{$dp->judul}}</td>
                                            <td>{{$dp->perusahaannya->nama_perusahaan}}</td>
                                            
                                            <td>{{$dp->sektor}}</td>
                                            <td>{{$dp->kontribusi}}</td>
                                            <td>{{$dp->jumlah}}</td>
                                            <td>@currency($dp->nominal)</td>
                                            <td>{{$dp->tujuan}}</td>
                                            <td>{{$dp->lokasi}}</td>
                                            <td >{{Str::limit($dp->latling,10)}}</td>
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
  @foreach ($reports as $dpm)
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
            <form method="POST" action="/update-laporan/{{$dpm->id}}" enctype="multipart/form-data">
                 @method('POST')
                    @csrf

                  <label for="tanggal">Tanggal Kegiatan</label>
                    <input id="{{$dpm->id}}tanggal" type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{$dpm->tanggal->format('Y-m-d')}}">
                    @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for="judul">Judul</label>
                    <input id="{{$dpm->id}}judul" type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{$dpm->judul}}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                 <label for="sub_sektor">Sektor</label>
                    <select name="sektor" class="form-control">                      
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Sosial Budaya">Sosial Budaya</option>
                        <option value="Prasarana Wilayah">Prasarana Wilayah</option>
                    </select>

                <label for="id_perusahaan">Perusahaan</label>
                    <select name="id_perusahaan" class="form-control">
                        @foreach ($perusahaan as $pr)
                        @if ($pr->id==$dpm->id_perusahaan)
                        <option value="{{$pr->id}}" selected>{{$pr->nama_perusahaan}}</option>
                        @else
                        <option value="{{$pr->id}}">{{$pr->nama_perusahaan}}</option>
                        @endif
                        @endforeach
                    </select>



                    <label for="kontribusi">Kontribusi</label>
                    <input id="{{$dpm->id}}kontribusi" type="text" name="kontribusi" class="form-control @error('kontribusi') is-invalid @enderror" value="{{$dpm->kontribusi}}">
                    @error('kontribusi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="jumlah">Jumlah Kontribusi</label>
                    <input id="{{$dpm->id}}jumlah" type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{$dpm->jumlah}}">
                    @error('jumlah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="nominal">nominal</label>
                    <input id="{{$dpm->id}}nominal" type="text" name="nominalx" class="form-control @error('nominal') is-invalid @enderror money" value="{{$dpm->nominal}}" autocomplete="off">
                    @error('nominal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="hidden" name="nominal" class="form-control @error('nominal') is-invalid @enderror aslinya" value="{{$dpm->nominal}}">

                    <label for="tujuan">Tujuan atau Penerima</label>
                    <input id="{{$dpm->id}}tujuan" type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" value="{{$dpm->tujuan}}">
                    @error('tujuan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="lokasi">Lokasi Kegiatan</label>
                    <input id="{{$dpm->id}}lokasi" type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{$dpm->lokasi}}">
                    @error('lokasi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="latling">Latling</label>
                    <input id="{{$dpm->id}}latling" type="text" name="latling" class="form-control @error('latling') is-invalid @enderror" value="{{$dpm->latling}}">
                    @error('latling')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="file">Dokumentasi</label>
                    <input id="{{$dpm->id}}file" type="file" name="gallery[]" class="form-control-file @error('gallery') is-invalid @enderror" multiple="true">
                    @error('gallery')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </br>
                    <div class="row">
                        @foreach($dpm->galleries as $g)
                                    
                        <img src="{{ asset('images/'.$g->url) }}" class="img-fluid col-md-4">
                                @endforeach

                   </div>

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
  @foreach ($reports as $dpm)
            <div class="modal fade" id="hapus{{$dpm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <!-- FORM -->
                            <p>Apakah anda yakin akan menghapus laporan</br> </p>
                            <!-- This container will become the editable. -->
            <form method="POST" action="/hapus-laporan/{{$dpm->id}}">
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