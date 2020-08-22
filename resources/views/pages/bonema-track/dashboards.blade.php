@extends('layouts.app')

@section('page-class', 'bonema-track')

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
<p>Our user friendly interface makes it easy for anyone to use. You can also use
  Bonema Technologies mobile application for all android and Apple devices.</p>
@endsection