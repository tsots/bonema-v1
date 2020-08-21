@extends('layouts.sidebar')

@section('page-class', 'bonema-fleet')

@include('inc/fleet-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
  <picture>
    <source
  srcset="{{asset('img/bonema-find__dashboard-large.png')}}"
      media="(min-width: 750px)"
    />
    <img
  src="{{asset('img/bonema-find__dashboard-small.png')}}"
      alt=""
    /><!-- End with the smallest size-->
  </picture>
</div>
<p>Our customized tracking interface is the most user friendly in the market. We handle the complicated and give you the easy.</p>

@endsection