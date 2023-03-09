@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('home/gallery.css')}}" />
@endsection
@section('content')

  <h1>{{$cat->name_category}}</h1>
  @if(!empty($origami))
  @foreach ($origami as $i=>$ori)
  <div class="gallery">
    <img src="{{asset($ori->img_origami)}}" alt="" >
    <div class="desc">{{$ori->name_origami}}</div>
    <div>
      <button class="btn"><a href="{{url('origami',$ori->id_origami)}}">Try it now</a></button>
    </div>
  </div>
  @endforeach
  @endif

  @endsection