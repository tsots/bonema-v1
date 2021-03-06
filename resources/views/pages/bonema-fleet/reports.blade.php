@extends('layouts.app')

@section('page-class', 'bonema-fleet')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
<img src="{{asset('images/img/bonema-fleet__report.png')}}" alt="" />
</div>
<p>Live stress free and let Bonema Technologies fleet management systems manage
  all aspects of your vehicle such as insurance, vehicle administration and
  fleet maintenance. <br /><br />Our user friendly interface also allows you to
  monitor the behaviour of your driver and performance of your fleets at any
  given point in time.</p>

@endsection