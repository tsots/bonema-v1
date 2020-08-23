@extends('layouts.app')

@section('page-name', 'home')

@section('styles')
{{-- <link rel="stylesheet" href="{{asset('')}}"> --}}
@endsection


@section('content')

<x-showcase />
<div class="swiper">
  <!-- Swiper -->
<div class="swiper-container">
  <h1>Testimonials</h1>
  <div class="swiper-wrapper">
    <div class="swiper-slide">&quot; I received Excellent service from Karabelo at Bonema. I am very grateful for your personal touch &quot;</div>
    <div class="swiper-slide"> &quot; I can see my taxis anywhere and anytime. It's so easy. Thank you Bonema &quot;</div>
    <div class="swiper-slide"> &quot; The technology is truly amazing and easy to use. The Fleet management reporting is ideal for businesses &quot; </div>
    <div class="swiper-slide"> &quot; It's so easy to manage my tax returns. The reports and soft logbooks make it such a breeze to run the business  &quot; </div>
    <div class="swiper-slide"> &quot; Bonema calls me to switch my lights off&nbsp; when I forget to switch them off as my battery will get drained. I can't imagine how my mornings would be without a car. Thank you Bonema &quot; </div>
    {{-- <div class="swiper-slide"> &quot; &quot; </div>
    <div class="swiper-slide"> &quot; &quot; </div>
    <div class="swiper-slide"> &quot; &quot; </div>
    <div class="swiper-slide"> &quot; &quot; </div>
    <div class="swiper-slide">Slide 10</div> --}}
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  {{-- <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div> --}}
</div>
</div>
@endsection

@section('page_specific_js')
<script src="{{asset('js/slider.js')}}"></script>
@endsection