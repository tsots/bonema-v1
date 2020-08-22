@extends('layouts.app')

@section('page-class', 'bonema-track')


@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
<img src="{{asset('images/img/bonema-track__real-time-alert.png')}}" alt="" />
</div>
<p>Get automatic alerts in real-time on your tablet, smart phone, and android and
  apple devices.</p>
@endsection