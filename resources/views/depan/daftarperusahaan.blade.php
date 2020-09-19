@extends('layouts.depan')
@section('content')

            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Home</a></li>
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

 
<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable({
    "order": []
});
} );
</script>
@endsection