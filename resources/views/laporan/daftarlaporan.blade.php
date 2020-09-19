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
                                            <th>Nama Perusahan</th>
                                            <th>Sektor</th>
                                            <th>Sub Sektor</th>
                                            <th>Jenis Kontribusi</th>
                                            <th>Jumlah (Unit)</th>
                                            <th>Tujuan/Penerima</th>
                                            <th>Lokasi</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $dp)

                                        <tr>
                                            <td>{{$dp->tanggal}}</td>
                                            <td>{{$dp->perusahaannya->nama_perusahaan}}</td>
                                            <td>{{$dp->sektor}}</td>
                                            <td>{{$dp->sub_sektor}}</td>
                                            <td>{{$dp->kontribusi}}</td>
                                            <td>{{$dp->jumlah}}</td>
                                            <td>{{$dp->tujuan}}</td>
                                            <td>{{$dp->lokasi}}</td>
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
            <form method="POST" action="/update-laporan/{{$dpm->id}}">
                 @method('PUT')
                    @csrf

                  <label for="tanggal">Tanggal Kegiatan</label>
                    <input id="tanggal" type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{$dpm->tanggal}}">
                    @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                 <label for="sektor">Sektor</label>
                    <select name="sektor" class="form-control">
                       <option value="Musrenbang">Musrenbang</option>
                        <option value="Permohonan Masyarakat">Permohonan Masyarakat</option>
                        <option value="Program Perusahaan">Program Perusahaan</option>
                    </select>

                 <label for="sub_sektor">Sub Sektor</label>
                    <select name="sub_sektor" class="form-control">                      
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Sosial Budaya">Sosial Budaya</option>
                        <option value="Prasarana Wilayah">Prasarana Wilayah</option>
                    </select>

                <label for="id_perusahaan">Perusahaan</label>
                    <select name="id_perusahaan" class="form-control">
                        @foreach ($perusahaan as $pr)
                        <option value="{{$pr->id}}">{{$pr->nama_perusahaan}}</option>
                        @endforeach
                    </select>

                    <label for="kontribusi">Kontribusi</label>
                    <input id="kontribusi" type="text" name="kontribusi" class="form-control @error('kontribusi') is-invalid @enderror" value="{{$dpm->kontribusi}}">
                    @error('kontribusi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="jumlah">Jumlah Kontribusi</label>
                    <input id="jumlah" type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{$dpm->jumlah}}">
                    @error('jumlah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="tujuan">Tujuan atau Penerima</label>
                    <input id="tujuan" type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" value="{{$dpm->tujuan}}">
                    @error('tujuan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="lokasi">Lokasi Kegiatan</label>
                    <input id="lokasi" type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{$dpm->lokasi}}">
                    @error('lokasi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="file">Dokumentasi</label>
                    <input id="file" type="file" name="gallery[]" class="form-control-file @error('gallery') is-invalid @enderror" multiple="true">
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

@toastr_render
    @endsection