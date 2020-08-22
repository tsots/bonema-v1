@extends('layouts.app')

@section('page-class', 'bonema-track')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
<img src="{{asset('images/img/bonema-track__driver__id.png')}}" alt="" />
</div>
<p>
  Our Driver identification system lets the vehicle owner/company know exactly
  who is driving the vehicle at any given point in time.
<br>
<br>
  Bonema Technologies driver identification system provides accurate and
  individual driver information making it easy to manage your vehicles. This
  provides driver accountability in areas such as speeding, abuse and misuse of
  company vehicles.
</p>

@endsection