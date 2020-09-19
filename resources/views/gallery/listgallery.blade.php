@extends('layouts.app')

@section('content')



            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
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
                                <i class="ti-briefcase"></i> Gallery Kegiatan/Laporan TJSP
                            </div>
                            <div class="tools">
                                
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover init-datatable" id="table_id">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Image</th>
                                            <th>Link Laporan</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gallery as $dp)

                                        <tr>
                                            <td><img src="{{ asset('images/'.$dp->url) }}" class="img-fluid" style="max-width: 200px"></td>
                                            <td><a href="{{url('/laporan/'.$dp->report->id)}}" target="_blank">{{url('/laporan/'.$dp->report->id)}}</a></td>
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
  @foreach ($gallery as $dpm)
            <div class="modal fade" id="hapus{{$dpm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <!-- FORM -->
                            <p>Apakah anda yakin akan menghapus Gallery ?</br> </p>
                            <!-- This container will become the editable. -->
            <form method="POST" action="/hapus-gallery/{{$dpm->id}}">
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