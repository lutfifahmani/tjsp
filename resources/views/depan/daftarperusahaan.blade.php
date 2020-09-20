@extends('layouts.depan')
@section('content')

         <section class="section">
    <div class="container">
    <h1 class="section-title wow fadeInUpQuick">
    Daftar Perusahaan
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
                                            <th>Logo Perusahan</th>
                                            <th>Nama Perusahan</th>
                                            <th>Alamat Perusahaan</th>
                                            <th>Kontak</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perusahaan as $dp)

                                        <tr>

                                            <td><img src="{{ asset('images/'.$dp->avatar) }}" width="100px"></td>
                                            <td>{{$dp->nama_perusahaan}}</td>
                                            <td>{{$dp->alamat_perusahaan}}</td>
                                            <td>{{$dp->kontak_perusahaan}}</td>
                                            <td style="width:12%"><a  href="{{url('/perusahaan/'.$dp->id)}}">Detail</a></td>
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