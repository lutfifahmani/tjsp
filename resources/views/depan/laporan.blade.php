@extends('layouts.depan')
@section('content')

    <section class="section">
    <div class="container">
    <h1 class="section-title wow fadeInUpQuick">
    Laporan CSR
    </h1>
    <p class="section-subcontent" style="text-transform: capitalize;"><b></b></p>

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
                    <div class="card">
                        <div class="card-body" style="padding:20px">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover init-datatable" id="table_id">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Perusahan</th>
                                            <th>Sektor</th>
                                            <th>Sub Sektor</th>
                                            <th>Jenis Kontribusi</th>
                                            <th>Detail</th>
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
                                            <td><a href="{{url('/laporan/'.$dp->id)}}">Detail</a></td>
                                            
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

 </div>
<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable({
    "order": []
});
} );
</script>
@endsection