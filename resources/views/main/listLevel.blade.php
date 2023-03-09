@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('home/gallery.css')}}" />
@endsection
@section('content')
<div>
  <h1>Level</h1>
  @if(!empty($level))
  @foreach ($level as $i=>$lev)
  <div class="gallery">
    <img src="{{asset($lev->img_level)}}" alt="" >

    <div class="desc">{{$lev->name_level}}</div>
    <div>
      <button class="btn"><a href="{{url('listOrigami/level',$lev->id_level)}}">Try it now</a></button>
    </div>
  </div>
  @endforeach
  @endif

  @endsection