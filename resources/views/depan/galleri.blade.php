@extends('layouts.depan')
@section('content')
<section id="featured" class="section">

<div class="container">
<h1 class="section-title wow fadeInUpQuick animated" style="visibility: visible;">
Galeri
</h1>
<div class="row">

    @foreach ($galleries as $gal)
    <div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUpQuick animated " data-wow-delay=".2s" data-animation="fadeIn" data-animation-delay="01" style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s; animation-delay: .2s; padding: 10px;">
        <a href="{{asset('images/'.$gal->url)}}" data-rel="lightcase:koleksi"><img src="{{asset('images/'.$gal->url)}}" class="img-fluid" style="object-fit: cover;height: 200px;margin: 15px" alt="CSR Program {{$gal->report->sektor}} , Sektor {{$gal->report->sub_sektor}}, Oleh {{$gal->report->perusahaannya->nama_perusahaan}}"></a>
    </div>
    @endforeach

     <div class="col-md-12">
         <center>{{ $galleries->links() }}</center>
     </div>
</div> 


</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('a[data-rel^=lightcase]').lightcase();
    });
</script>   
</section>
@endsection