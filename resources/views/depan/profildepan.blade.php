@extends('layouts.depan')
@section('content')
<section class="classic-blog-section section">
<div class="container">
<div class="row">

<div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">

<article class="blog-post-wrapper" style="text-align: center;">

<header class="author-info">
<h2 class="blog-post-title"><a href="#">{{$pages[0]->title}}</a></h2>
<div class="tag-posted-in">
<ul class="list-unstyled">
</ul>
</div>
</header>

<section class="featured-wrapper">
<a href="#">
    
</a>
</section>

<section class="blog-post-content">
<div class="blog-post clearfix">
{!!$pages[0]->content!!} (Admin)
</div>
</section>
</article>

</div>
</div>
</div>
</section>

@endsection