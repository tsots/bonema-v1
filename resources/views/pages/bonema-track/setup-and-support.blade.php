@extends('layouts.app')

@section('page-class', 'bonema-track')
@section('page-name', 'track-support')


@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">Setup &amp; Support</h1> --}}
  <p>
    We customize our systems according to your unique specification.<br />
    Bonema Technologies provides one on one training of our systems to
    our business clients
  </p>

  <h2>Get setup and installation within minutes.</h2>
  <section class="cards">
    <div class="card card__1">
      <div class="card card__icon">
      <img src="{{asset('images/img/bonema-find__setupicon.png')}}" alt="" />
      </div>
      <div class="card card__content">
        <div class="card card__content card__content__heading">
          CUSTOMIZED TO YOU
        </div>
        <div class="card card__content card__content__text">
          Get the information you need, the way you need it without
          hassle, extra cost, or frustration.
        </div>
      </div>
    </div>
    <!--END OF CARD-->
    <div class="card card__2">
      <div class="card card__icon">
      <img src="{{asset('images/img/bonema-find__setupicon2.png')}}" alt="" />
      </div>
      <div class="card card__content">
        <div class="card card__content card__content__heading">
          SET UP IN MINUTES, MAKE CHANGES IN SECONDS
        </div>
        <div class="card card__content card__content__text">
          Check boxes, radio button and drop-downs make it easy as pie
          to use BONEMA FIND the way you want to without needing help
          from I.T.
        </div>
      </div>
    </div>

    <!--END OF CARD-->
    <div class="card card__3">
      <div class="card card__icon">
      <img src="{{asset('images/img/bonema-find__setupicon3.png')}}" alt="" />
      </div>
      <div class="card card__content">
        <div class="card card__content card__content__heading">
          GET TO THE POINT
        </div>
        <div class="card card__content card__content__text">
          Use simple permissions to specify who can see which vehicles
          and groups, while also limiting access to features they truly
          need.
        </div>
      </div>
    </div>
    <!--END OF CARDS-->
    <div class="card card__4">
      <div class="card card__icon">
      <img src="{{asset('images/img/bonema-find__setupicon4.png')}}" alt="" />
      </div>
      <div class="card card__content">
        <div class="card card__content card__content__heading">
          DONE AND DONE
        </div>
        <div class="card card__content card__content__text">
          Don’t worry about installation, maintenance, downloading
          updates or security. Also, there aren’t any other additional
          I.T. investments that software requires.
        </div>
      </div>
    </div>
  </section>

  <!--END OF CARDS-->
</div>
@endsection