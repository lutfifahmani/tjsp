@extends('layouts.depan')
@section('content')


<section class="section" id="slider" style="padding-top: 0">
		
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
			  <div class="carousel-inner">
			  	 
			  	 	@if ($posts2)
			  	 <div class="carousel-item active">
			      <img class="img" src="{{asset('images/'.$posts2->image)}}" width="100%" alt="First slide" style="height: 600px">
			      <div class="carousel-caption d-none d-md-block" style="background-color: #0000008a;padding: 10px">
				    <h3 style="color: white;">{{$posts2->judul}}</h3>
				    <p>{{$posts2->sub_judul}}</p>
				   </div>
			    </div>
			    @endif
			  	 	@foreach ($posts as $ps)
			    <div class="carousel-item">
			      <img class="img" src="{{asset('images/'.$ps->image)}}" alt="First slide" width="100%" style="height: 600px">
			      <div class="carousel-caption d-none d-md-block" style="background-color: #0000008a;padding: 10px"; >
				    <h3 style="color: white;">{{$ps->judul}}</h3>
				    <p>{{$ps->sub_judul}}</p>
				   </div>
			    </div>
			    @endforeach
			   </div>
			
  
</div>

</section>

<section id="blog" class="section">

<div class="container">
<h1 class="section-title wow fadeInUpQuick">
Berita dan Kegiatan
</h1>
<p class="section-subcontent">Berita dan Kegiatan Forum TJSP Kota Samarinda</p>

<div class="row">
	@foreach ($posts as $pes)
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<div class="blog-item-wrapper">
		<div class="blog-item-img">
		<a href="{{url('/berita/'.$pes->url)}}">
		<img src="{{asset('images/'.$pes->image)}}" alt="">
		</a>
		</div>
		<div class="blog-item-text">
		<h3 class="small-title"><a href="{{url('/berita/'.$pes->url)}}">{{$pes->judul}}</a></h3>
		<p>
		{{$pes->sub_judul}}
		</p>
		<div class="blog-one-footer">
		<a href="{{url('/berita/'.$pes->url)}}">Read More</a>
		<a href="#"><i class="icon-puser"></i> Admin</a>
		<a href="#"><i class="icon-time"></i> {{$pes->updated_at}}</a>
		</div>
		</div>
		</div>
	</div>
	@endforeach
</div>
<br>
<a href="{{url('/berita')}}" class="btn btn-block btn-success">Lihat Semua Berita</a>
</div>

</section>

<section id="clients" class="section">

<div class="container">
<h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
Perusahaan
</h1>
<p class="section-subcontent">Perusahaan yang telah ikut serta berkontribusi</p>
<div class="wow fadeInUpQuick" data-wow-delay="0.3s">

<div id="clients-scroller" class="owl-carousel">
	@foreach($perusahaan as $pr)
<div class="item item client-item-wrapper" >
<a href="{{url('/perusahaan/'.$pr->id)}}"><img src="{{asset('images/'.$pr->avatar)}}" alt="" class="img-fluid" style="height: 220px"></a>
<p><b><a href="{{url('/perusahaan/'.$pr->id)}}">{{$pr->nama_perusahaan}}</a></b></p>
</div>
@endforeach
</div>
<br>
<a href="{{url('/perusahaan')}}" class="btn btn-block btn-success">Lihat Semua Perusahaan</a>
</div>
</div>
</section>
@endsection