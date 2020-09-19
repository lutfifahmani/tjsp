@extends('layouts.app')

@section('content')



            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Pengajuan</a></li>
                        <li class="breadcrumb-item active">Daftar Pengajuan</li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->

            <!-- BOF MAIN-BODY -->
              <!-- BOF Basic Datatable -->
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption uppercase">
                                <i class="ti-briefcase"></i> Daftar Pengajuan
                            </div>
                            <div class="tools">
                                
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover init-datatable" id="table_id">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width:25%">Judul</th>
                                            <th>Program</th>
                                            <th>Jenis Pengajuan</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Alamat Perusahaan</th>
                                            <th>Alamat Email</th>
                                            <th>Telepon</th>
                                            <th>Jenis Bantuan</th>
                                            <th>Jumlah (Unit)</th>
                                            <th>Nilai Asumsi</th>
                                            <th>Tahun</th>
                                            <th>Keterangan</th>
                                            <th>Kelola</th>

         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($requests as $dp)

                                        <tr>
                                            <td style="width:25%">{{$dp->judul}}</td>
                                            <td>{{$dp->program}}</td>
                                            <td>{{$dp->jenis_permohonan}}</td>
                                            <td>{{$dp->nama_perusahaan}}</td>
                                            <td>{{$dp->alamat_perusahaan}}</td>
                                            <td>{{$dp->email}}</td>
                                            <td>{{$dp->no_telepon}}</td>
                                            <td>{{$dp->jenis_bantuan}}</td>
                                            <td>{{$dp->jumlah}}</td>
                                            <td>{{$dp->nilai_asumsi}}</td>
                                            <td>{{$dp->tahun}}</td>
                                            <td>{{$dp->keterangan}}</td>
                                            <td style="width:5%"><button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus{{$dp->id}}"><i class="ti ti-trash"></i></button></td>
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
                      <!-- FORM -->

<!-- BOF MODALS -->
  @foreach ($requests as $dpm)
            <div class="modal fade" id="hapus{{$dpm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <!-- FORM -->
                            <p>Apakah anda yakin akan menghapus Pengajuan ?</br> </p>
                            <!-- This container will become the editable. -->
            <form method="POST" action="/hapus-pengajuan/{{$dpm->id}}">
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