@extends('layouts.depan')
@section('content')
<section id="featured" class="section">

<div class="container">
<h1 class="section-title wow fadeInUpQuick animated" style="visibility: visible;">
<img src="{{ asset('images/'.$perusahaan->avatar) }}" width="100px">
{{$perusahaan->nama_perusahaan}}
</h1>
<p class="section-subcontent"><b>Alamat : {{$perusahaan->alamat_perusahaan}}</b></p>
<div class="row">

<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUpQuick animated" data-wow-delay=".2s" data-animation="fadeIn" data-animation-delay="01" style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s; animation-delay: .2s;">
<div class="featured-box feature-s">
<div class="featured-icon" style="height: 53px">
<i class="icon-briefcase">
</i>
</div>
<div class="featured-content">
<h4>
Detail Perusahaan
</h4>
<p>
<table class="table">
	<tr><th>Nama </th><th>: {{$perusahaan->nama_perusahaan}} </th></tr>
	<tr><th>Alamat </th><th>: {{$perusahaan->alamat_perusahaan}} </th></tr>
	<tr><th>Email	 </th><th>: {{$perusahaan->email_perusahaan}} </th></tr>
	<tr><th>Kontak </th><th>: {{$perusahaan->kontak_perusahaan}} </th></tr>
	<tr><th>Keterangan </th><th>: {{$perusahaan->keterangan}} </th></tr>
</table>
</p>
</div>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUpQuick animated" data-wow-delay=".2s" data-animation="fadeIn" data-animation-delay="01" style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s; animation-delay: .2s;">
<div class="featured-box feature-s">
<div class="featured-icon" style="height: 53px">
<i class="icon-badge">
</i>
</div>
<div class="featured-content">
<h4>
Kontribusi Perusahaan
</h4>
<p>
<table class="table">
	<tr><th>Tanggal</th>
		<th>Sektor</th>
		<th>Sub Sektor</th>
		<th>Kontribusi</th>
		<th>Detail</th></tr>
	@foreach ($perusahaan->reports as $rep)
	<tr><td>{{$rep->tanggal}}</td>
		<td>{{$rep->sektor}}</td>
		<td>{{$rep->sub_sektor}} Sektor</td>
		<td>{{$rep->kontribusi}}</td>
		<td><a href="{{url('/laporan/'.$rep->id)}}">Detail</a></td></tr>
	@endforeach
</table>
</p>
</div>
</div>
</div>





</section>
@endsection