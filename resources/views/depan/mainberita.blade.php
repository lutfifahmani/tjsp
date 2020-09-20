@extends('layouts.depan')
@section('content')
<section id="blog" class="section">

<div class="container">
<h1 class="section-title wow fadeInUpQuick">
Halaman Berita
</h1>
<p class="section-subcontent">Berita dan Rangkuman Program Kegiatan Forum TJSP Kota Samarinda</p>

<div class="row">

 @foreach ($posts as $berita)
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

<div class="blog-item-wrapper wow fadeIn" data-wow-delay="0.3s">
<div class="blog-item-img">
<a href="{{url('/berita/'.$berita->url)}}">
<img src="{{asset('images/'.$berita->image)}}" alt="">
</a>
</div>
<div class="blog-item-text">
<h3 class="small-title"><a href="{{url('/berita/'.$berita->url)}}">{{$berita->judul}}</a></h3>
<p>
{{$berita->sub_judul}}
</p>
<div class="blog-one-footer">
<a href="{{url('/berita/'.$berita->url)}}" style="color: red">Selengkapnya</a>
<a href="#"><i class="icon-user"></i> Admin</a>
<a href="#"><i class="icon-clock"></i> {{$berita->updated_at}}</a>
</div>
</div>
</div>
</div>
@endforeach
</div>
</section>

@endsection	