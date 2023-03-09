@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('home/gallery.css')}}" />
@endsection
@section('content')
<div>
  <h1>Category</h1>
  @if(!empty($category))
  @foreach ($category as $i=>$cat)
  <div href="{{url('listOrigami/category',$cat->id_category)}}" class="gallery">
    <img src="{{asset($cat->img_category)}}" alt="" >

    <div class="desc">{{$cat->name_category}}</div>
    <div>
      <button class="btn"><a href="{{url('listOrigami/category',$cat->id_category)}}">Try it now</a></button>
    </div>
  </div>
  @endforeach
  @endif

  @endsection