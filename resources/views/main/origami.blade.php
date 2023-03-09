@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('home/step.css')}}" />
@endsection
@section('content')
<div class="step">
<h1>{{$origami->name_origami}}</h1>
@if(!empty($step))
@foreach ($step as $i=>$st)
<div>
    <ul>
        <li>
            <img src="{{asset($st->img_step)}}" alt="" />
        </li>
        <li>
            {{$st->deseribe}}
        </li>
    </ul>
</div>
@endforeach
@endif
</div>
@endsection