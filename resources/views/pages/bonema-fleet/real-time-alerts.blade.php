@extends('layouts.sidebar')

@section('page-class', 'bonema-fleet')

@include('inc/fleet-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
<img src="{{asset('img/bonema-track__real-time-alert.png')}}" alt="" />
</div>
<p>Our systems send alerts to the vehicle administrator of the company should the vehicle be in an accident, misused or stolen. We handle the dirty work for
  you.</p>

@endsection