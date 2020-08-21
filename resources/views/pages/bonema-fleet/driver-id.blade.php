@extends('layouts.sidebar')

@section('page-class', 'bonema-fleet')

@include('inc/fleet-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
<img src="{{asset('img/bonema-track__driver__id.png')}}" alt="" />
</div>
<p>
  Know which driver is using which vehicle at any given time of day and night.
<br>
<br>
  Bonema Technologies driver identification system provides accurate and
  individual driver information making it easy to manage your logistics.
  <br />This provides driver accountability in areas such as speeding, abuse and
  misuse of company vehicles.
</p>

@endsection