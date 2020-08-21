@extends('layouts.app')

@section('page-class', 'bonema-find')

@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
  <picture>
    <source
  srcset="{{asset('img/bonema-find__real-time-alerts-large.png')}}"
      media="(min-width: 750px)"
    />
    <img
      src="{{asset('img/bonema-find__real-time-alerts-small.png')}}"
      alt=""
    /><!-- End with the smallest size-->
  </picture>
</div>
<p>You are able to receive notifications on your cell phone in real-time via sms
  or email should your vehicle enter an undesired location or exceed a certain
  speed limits.</p>

@endsection