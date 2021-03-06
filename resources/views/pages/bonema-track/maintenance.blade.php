@extends('layouts.app')

@section('page-class', 'bonema-track')


@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
  <picture>
    <source
  srcset="{{asset('images/img/bonema-track__fleet-maintenance-large.png')}}"
      media="(min-width: 750px)"
    />
    <img
  src="{{asset('images/img/bonema-track__fleet-maintenance-small.png')}}"
      alt=""
    /><!-- End with the smallest size-->
  </picture>
</div>
<p>No more keeping mental notes of when your vehicle is due for maintenance. With
  the Bonema vehicle Bonema Track solutions you’re in safe hands.</p>

@endsection