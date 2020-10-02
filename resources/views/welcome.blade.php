@extends('layouts.depan')
@section('content')


<section class="section" id="slider" style="padding: 0">
		
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
			  <div class="carousel-inner">
			  	 
			  	 	@if ($slideposts2)
			  	 <div class="carousel-item active">
			      <img class="img" src="{{asset('images/'.$slideposts2->image)}}" width="100%" alt="First slide" style="height: auto;">
			      <div class="carousel-caption d-none d-md-block" style="background-color: #0000008a;padding: 10px">
				    <h3 style="color: white;">{{$slideposts2->judul}}</h3>
				    <p>{{$slideposts2->sub_judul}}</p>
				   </div>
			    </div>
			    @endif
			  	 	@foreach ($slideposts as $ps)
			    <div class="carousel-item">
			      <img class="img" src="{{asset('images/'.$ps->image)}}" alt="First slide" width="100%" style="height: 600px;object-fit: cover">
			      <div class="carousel-caption d-none d-md-block" style="background-color: #0000008a;padding: 10px"; >
				    <h3 style="color: white;">{{$ps->judul}}</h3>
				    <p>{{$ps->sub_judul}}</p>
				   </div>
			    </div>
			    @endforeach
			   </div>
			
  
</div>

</section>

<section id="cool-facts" class="section">

<div class="container">

<div class="row">
	<div class="col-md-12"><h3 class="small-title mb-3" style="color:white;text-align: center;">Informasi TJSP </h3></div>
<div class="col-sm-12 col-md-4 col-lg-4">

<div class="fact-block clearfix wow fadeInUpQuick" data-wow-delay="0.3s">
<div class="facts-item">
<i class="icon-briefcase"></i>
<div class="fact-count">
<h3><span class="counter">{{count($perusahaan)}}</span></h3>
<h4>Perusahaan</h4>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 col-lg-4">

<div class="fact-block clearfix wow fadeInUpQuick" data-wow-delay="0.6s">
<div class="facts-item">
<i class="icon-list"></i>
<div class="fact-count">
<h3><span class="counter">{{count($requests)}}</span></h3>
<h4>Permohonan</h4>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 col-lg-4">

<div class="fact-block clearfix wow fadeInUpQuick" data-wow-delay="0.9s">
<div class="facts-item">
<i class="icon-rocket"></i>
<div class="fact-count">
<h3><span class="counter">{{count($reports)}}</span></h3>
<h4>Realisasi</h4>
</div>
</div>
</div>
</div>
</div>
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
		<img src="{{asset('images/'.$pes->image)}}" alt="" style="height: 200px;object-fit: cover">
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
<a href="{{url('/perusahaan/'.$pr->id)}}"><img src="{{asset('images/'.$pr->avatar)}}" alt="" class="img-fluid" style="object-fit: cover;height: 180px"></a>
<p><b><a href="{{url('/perusahaan/'.$pr->id)}}">{{$pr->nama_perusahaan}}</a></b></p>
</div>
@endforeach
</div>
<br>
<a href="{{url('/perusahaan')}}" class="btn btn-block btn-success">Lihat Semua Perusahaan</a>
</div>
</div>
</section>

<section class="section">
	<div class="container">
		<h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
PETA REALISASI PROGRAM TJSP 
</h1>
	
    <div id="map"></div>
    </div>
</section>

<script>
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 14,
    center: { lat: -0.502818, lng: 117.141870 }
  });

  var lokasi = {!!$reports!!};

  var infowindow = new google.maps.InfoWindow();
  


  	function addMarker(x){

  		var lat = x.latling.split(",")[0];
  		var lng = x.latling.split(",")[1];	
  		const marker = new google.maps.Marker({
        map: map,
        position: { lat: parseFloat(lat), lng: parseFloat(lng) }
      });

  		google.maps.event.addListener(marker, 'click', function(){
        infowindow.close(); // Close previously opened infowindow
        infowindow.setContent('<div class="single-pricing-2"><ul class="list-unstyled"><li style="color:white;background-color:green"><b>'+x.judul+'</b></li><li>Kontribusi : '+x.kontribusi+'</li><li>Jumlah : '+x.jumlah+'</li><li>Nominal : '+x.nominal+'</li><li>Penerima : '+x.tujuan+'</li></ul></div>');
        infowindow.open(map, marker);
    });
  	}

  	lokasi.forEach( addMarker );

  
      

}


    </script>
@endsection