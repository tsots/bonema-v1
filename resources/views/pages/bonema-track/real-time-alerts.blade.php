@extends('layouts.sidebar')

@section('page-class', 'bonema-track')

@include('inc/track-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
<img src="{{asset('img/bonema-track__real-time-alert.png')}}" alt="" />
</div>
<p>Get automatic alerts in real-time on your tablet, smart phone, and android and
  apple devices.</p>
@endsection