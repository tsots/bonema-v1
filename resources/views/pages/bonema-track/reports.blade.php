@extends('layouts.app')

@section('page-class', 'bonema-track')


@section('content')
<h1>{{$title}}</h1>
<div class="infor__image">
<img src="{{asset('img/bonema-trach-track__report.png')}}" alt="" />
</div>
<p>Know exactly where and how your vehicle has been driven by downloading various
  reports such history reports and speeding reports. Our systems have up to 25
  reports of which can be downloaded.</p>

@endsection