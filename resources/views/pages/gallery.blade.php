@extends('layouts.app')
@section('page-class','gallery')

@section('content')
<h1>{{$title}}</h1>
<div class="gallery">
<a href="{{asset('img/gallery/Image1-large.jpg')}}"><img src="{{asset('img/gallery/Image1-small.jpg')}}" alt=""></a>
<a href="{{asset('img/gallery/Image2-large.jpg')}}"><img src="{{asset('img/gallery/Image2-small.jpg')}}" alt=""></a>
<a href="{{asset('img/gallery/Image3-large.jpg')}}"><img src="{{asset('img/gallery/Image3-small.jpg')}}" alt=""></a>
<a href="{{asset('img/gallery/Image4-large.jpg')}}"><img src="{{asset('img/gallery/Image4-small.jpg')}}" alt=""></a>

<a href="{{asset('img/gallery/Image1-large.jpg')}}"><img src="{{asset('img/gallery/Image1-small.jpg')}}" alt=""></a>
<a href="{{asset('img/gallery/Image2-large.jpg')}}"><img src="{{asset('img/gallery/Image2-small.jpg')}}" alt=""></a>
<a href="{{asset('img/gallery/Image3-large.jpg')}}"><img src="{{asset('img/gallery/Image3-small.jpg')}}" alt=""></a>
<a href="{{asset('img/gallery/Image4-large.jpg')}}"><img src="{{asset('img/gallery/Image4-small.jpg')}}" alt=""></a>
</div>
@endsection