@extends('layouts.app')

@section('page-class', 'bonema-fleet')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
  <picture>
    <source
  srcset="{{asset('images/img/bonema-fleet__fleet-maintenance-large.png')}}"
      media="(min-width: 750px)"
    />
    <img
  src="{{asset('images/img/bonema-fleet__fleet-maintenance-small.png')}}"
      alt=""
    /><!-- End with the smallest size-->
  </picture>
</div>
<p>Avoid skipping vehicle servicing. With our systems you can set alerts to notify you when your vehicle is due for servicing.</p>

@endsection