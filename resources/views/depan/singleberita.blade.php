@extends('layouts.depan')
@section('content')
<section class="classic-blog-section section">
<div class="container">
<div class="row">

<div class="col-md-9 wow fadeIn" data-wow-delay="0.3s">

<article class="blog-post-wrapper">

<header class="author-info">
<h2 class="blog-post-title"><a href="#">{{$posts->judul}}</a></h2>
<div class="tag-posted-in">
<ul class="list-unstyled">
<li><i class="fa fa fa-calendar"></i> <a href="#">{{$posts->updated_at}}</a></li>
<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
</ul>
</div>
</header>

<section class="featured-wrapper">
<a href="#">
<img src="{{asset('/images/'.$posts->image)}}" alt="">
</a>
</section>

<section class="blog-post-content">
<div class="blog-post clearfix">
{!!$posts->isi!!} (Admin)
</div>
</section>
</article>

</div>

<div class="col-md-3">
<div class="sidebar-area">


<aside class="widget popular-post wow fadeIn" data-wow-delay="0.3s">
  <h2 class="widget-title">Berita lainnya</h2>
  <ul>
    @foreach($posts1 as $widget)
    <li>
        <div class="media">
        <div class="media-left">
        <a href="{{url('/berita/'.$widget->url)}}"><img class="img-responsive" src="{{asset('/images/'.$widget->image)}}" alt="" width="50px"></a>
        </div>
        <div class="media-body">
        <h4><a href="{{url('/berita/'.$widget->url)}}">{{$widget->judul}}</a></h4>
        <span class="published-time"><i class="fa fa-calendar"></i> {{$widget->updated_at}}</span>
        </div>
        </div>
    </li>
    @endforeach
  </ul>
</aside>


</div>
</div>

</div>
</div>
</section>

@endsection