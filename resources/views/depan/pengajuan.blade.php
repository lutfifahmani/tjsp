@extends('layouts.depan')
@section('content')
<!-- BOF Breadcrumb -->
<section class="section">
    <div class="container">
<h1 class="section-title wow fadeInUpQuick">
Pengajuan Permohonan
</h1>
<p class="section-subcontent" style="text-transform: capitalize;"></b></p>
            <!-- EOF Breadcrumb -->
             <!-- BOF MAIN-BODY -->
             @if ($status = Session::get('status'))
            <!-- EOF Breadcrumb -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{$status}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="/add-pengajuan" enctype="multipart/form-data">
                     @method('POST')
                        @csrf

                    <label for="judul">Judul</label>
                    <input type="text" name="judul"  class="form-control @error('judul') is-invalid @enderror">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label for="program">Program</label>
                    <select name="program" class="form-control">
                    <option value="Sosial Budaya">Sosial Budaya</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Prasarana Wilayah">Prasarana Wilayah</option>
                </select>
                    
                    <label for="jenis_permohonan">Jenis Permohonan</label>
                    <select name="jenis_permohonan" class="form-control">
                        <option value="Musrenbang">Musrenbang</option>
                        <option value="Permohonan Masyarakat">Permohonan Masyarakat</option>
                        <option value="Program Perusahaan">Program Perusahaan</option>
                    </select>
                    
                    <label for="nama_perusahaan">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan"  class="form-control @error('nama_perusahaan') is-invalid @enderror">
                    @error('nama_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label for="alamat_perusahaan">Alamat Perusahaan</label>
                    <input type="text" name="alamat_perusahaan"  class="form-control @error('alamat_perusahaan') is-invalid @enderror">
                    @error('alamat_perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label for="email">Email</label>
                    <input type="text" name="email"  class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" name="no_telepon"  class="form-control @error('no_telepon') is-invalid @enderror">
                    @error('no_telepon')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    
                </div>

                <div class="col-md-6">
                    <label for="jenis_bantuan">Jenis Bantuan</label>
                    <input type="text" name="jenis_bantuan"  class="form-control @error('jenis_bantuan') is-invalid @enderror">
                    @error('jenis_bantuan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah"  class="form-control @error('jumlah') is-invalid @enderror">
                    @error('jumlah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label for="nilai_asumsi">Nilai Asumsi</label>
                    <input type="text" name="nilai_asumsi"  class="form-control @error('nilai_asumsi') is-invalid @enderror money" autocomplete="off">
                    @error('nilai_asumsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                     <input type="hidden" name="nilai_asumsi2"  class="form-control @error('nilai_asumsi') is-invalid @enderror aslinya">
                    
                    <label for="tahun">Tahun</label>
                    <select class="form-control" name="tahun">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    
                    <label for="keterangan">Keterangan</label>
                    <textarea rows="6" type="text" name="keterangan"  class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                    @error('keterangan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                    
                   
                </div>
            </div>
        </br>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Ajukan Permohonan">
                    </div>
              </form>
                </div>
            </div>
<script type="text/javascript">
    $('#showsimple').click(function () {
            // Display a success toast, with a title
            toastr.success('Data laporan Telah ditambahkan ..', 'Berhasil !!')
        });

    

</script>
</div>

@endsection