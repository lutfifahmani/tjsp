@extends('layouts.depan')
@section('content')

<section class="section">
    <div class="container">
<h1 class="section-title wow fadeInUpQuick">
CSR Program
</h1>
<p class="section-subcontent" style="text-transform: capitalize;"><b>Jenis Program : {{$program}}<br> 
Asal Pengajuan : {{$pemohon}}</b></p>
            <!-- BOF MAIN-BODY -->
              <!-- BOF Basic Datatable -->
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption uppercase">
                                <i class="ti-briefcase"></i>
                            </div>
                            <div class="tools">
                                
                               
                            </div>
                        </div>
                        <div class="card-body" style="padding: 10px">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover init-datatable" id="table_id">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width:25%">Judul</th>
                                            <th>Diajukan Oleh</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Jenis Bantuan</th>
                                            <th>Jumlah</th>
                                            <th>Nilai Asumsi</th>
                                            <th>Tahun</th>
                                            <th>Keterangan</th>

         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($requests as $dp)

                                        <tr>
                                            <td style="width:25%">{{$dp->judul}}</td>
                                           
                                            <td>{{$dp->nama_perusahaan}}</td>
                                            <td>{{$dp->alamat_perusahaan}}</td>
                                            <td>{{$dp->email}}</td>
                                            <td>{{$dp->no_telepon}}</td>
                                            <td>{{$dp->jenis_bantuan}}</td>
                                            <td>{{$dp->jumlah}}</td>
                                            <td>@currency($dp->nilai_asumsi)</td>
                                            <td>{{$dp->tahun}}</td>
                                            <td>{{$dp->keterangan}}</td>
                                            
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
</section>
 </div>
<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable({
    "order": []
});
} );
</script>
@endsection