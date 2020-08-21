@extends('layouts.app')

@section('page-class', 'bonema-find')


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
<p>Anyone in the household can literally track the location of the vehicles. It’s
  so easy anyone can do it. <br />
  Avoid skipping vehicle servicing. With our systems you can set alerts to
  notify you when your vehicle is due for servicing.</p>

@endsection