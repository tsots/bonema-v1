@extends('layouts.app')

@section('page-class', 'bonema-fleet')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
  <picture>
    <source
  srcset="{{asset('images/img/bonema-find__dashboard-large.png')}}"
      media="(min-width: 750px)"
    />
    <img
  src="{{asset('images/img/bonema-find__dashboard-small.png')}}"
      alt=""
    /><!-- End with the smallest size-->
  </picture>
</div>
<p>Our customized tracking interface is the most user friendly in the market. We handle the complicated and give you the easy.</p>

@endsection