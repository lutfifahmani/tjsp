@extends('layouts.depan')
@section('content')
<section id="featured" class="section">

<div class="container">
<h1 class="section-title wow fadeInUpQuick animated" style="visibility: visible;">
Program {{$reports->sektor}}
</h1>
<p class="section-subcontent"><b>Sub Sektor {{$reports->sub_sektor}}</b></p>
<div class="row">

<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUpQuick animated" data-wow-delay=".2s" data-animation="fadeIn" data-animation-delay="01" style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s; animation-delay: .2s;">
<div class="featured-box feature-s">
<div class="featured-icon" style="height: 53px">
<i class="icon-briefcase">
</i>
</div>
<div class="featured-content">
<h4>
Detail Laporan
</h4>
<p>
<table class="table">
	<tr><th>Nama Perusahaan</th><th>: {{$reports->perusahaannya->nama_perusahaan}} </th></tr>
	<tr><th>Tanggal</th><th>: {{$reports->tanggal}} </th></tr>
	<tr><th>Kontribusi </th><th>: {{$reports->kontribusi}} </th></tr>
	<tr><th>Jumlah Kontribusi	 </th><th>: {{$reports->jumlah}} </th></tr>
	<tr><th>Penerima </th><th>: {{$reports->tujuan}} </th></tr>
	<tr><th>Lokasi </th><th>: {{$reports->lokasi}} </th></tr>
	<tr><th>Keterangan </th><th>: {{$reports->keterangan}} </th></tr>
</table>
</p>
</div>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUpQuick animated" data-wow-delay=".2s" data-animation="fadeIn" data-animation-delay="01" style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s; animation-delay: .2s;">
<div class="featured-box feature-s">
<div class="featured-icon" style="height: 53px">
<i class="icon-picture">
</i>
</div>
<div class="featured-content">
<h4>
Gallery
</h4>
<p>
		@foreach ($reports->galleries as $gallery)
		<a href="{{asset('/images/'.$gallery->url)}}" data-rel="lightcase:myCollection"><img src="{{asset('/images/'.$gallery->url)}}" width="100px"></a>
		@endforeach
</p>
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