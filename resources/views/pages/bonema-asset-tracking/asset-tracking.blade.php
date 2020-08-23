@extends('layouts.app')


@section('page-class', 'asset-tracking')
@section('page-name', 'asset-tracking')

@section('content')
<h1>{{$title}}</h1>
<h2 class="sub-heading">Standardized process with professional reporting</h2>
<div class="infor__image">
  <picture>
    <img
  src="{{asset('images/img/bonema-asset__life-cycle.png')}}"
      alt=""
    /><!-- End with the smallest size-->
  </picture>
</div>
<ul>
  <li>Web-based Application (works on any smart device)</li>
  <li>Real-time Asset life-cycle management and tracking</li>
  <li>Track Assets in and out the office with no bounds in real-time</li>
  <li>Inventory tools and software to perform audits in minutes (Introducing the Bonema Magic Wand- reads labels in a room in seconds, no line of sight required with upto 25m reading range)</li>
  <li>Add Assets, Locations, Users, Vendors & Contracts</li>
  <li>Field level security allows to set groups of users with rights</li>
  <li>Home of the Bonema Magic Wand - Wireless Scanner that reads and reconciles assets in a location in seconds</li>
  <li>Built in Checkout and Return module for Assets</li>
  <li>Professional-grade data grid - highly customizable</li>
  <li>Manage Lists of Assets and Build Custom Queries</li>
  <li>Save digital documents to assets’ records</li>
  <li>Track Serialized and Non-Serialized Assets in real-time</li>
  <li>Administer and deploy changes which are instantly available to all the Web Users</li>
</ul>
@endsection