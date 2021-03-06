@extends('layouts.app')

@section('page-class','gallery')
@section('page-name','bonema-gallery')

@section('content')
<div class="gallery">
  <h1>{{$title}}</h1>

<div class="images">
  <a href="{{asset('images/gallery/Image1-large.jpg')}}"><img src="{{asset('images/gallery/Image1-small.jpg')}}" alt=""></a>

<a href="{{asset('images/gallery/Image2-large.jpg')}}"><img src="{{asset('images/gallery/Image2-small.jpg')}}" alt=""></a>

<a href="{{asset('images/gallery/Image3-large.jpg')}}"><img src="{{asset('images/gallery/Image3-small.jpg')}}" alt=""></a>

<a href="{{asset('images/gallery/Image4-large.jpg')}}"><img src="{{asset('images/gallery/Image4-small.jpg')}}" alt=""></a>

<a href="{{asset('images/gallery/Image1-large.jpg')}}"><img src="{{asset('images/gallery/Image1-small.jpg')}}" alt=""></a>

<a href="{{asset('images/gallery/Image2-large.jpg')}}"><img src="{{asset('images/gallery/Image2-small.jpg')}}" alt=""></a>

<a href="{{asset('images/gallery/Image3-large.jpg')}}"><img src="{{asset('images/gallery/Image3-small.jpg')}}" alt=""></a>

<a href="{{asset('images/gallery/Image4-large.jpg')}}"><img src="{{asset('images/gallery/Image4-small.jpg')}}" alt=""></a>
</div>
</div>
@endsection