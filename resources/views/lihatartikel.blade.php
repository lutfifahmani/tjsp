@extends('layouts.app')
@section('content')
  <div class="row">
                <div class="col-md-12">
                	@foreach ($posts as $dp)
                    <h1>{{$dp->judul}}</h1>
                    {!!$dp->isi!!}
                    @endforeach
                   </div>
   </div>
@endsection