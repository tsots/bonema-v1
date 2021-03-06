<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    /> --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>{{config ('app.name')}} | {{$title}}</title>
</head>
@if (\Request::is('/') or \Request::is('support') or \Request::is('contact-us') or \Request::is('free-demo')) 

<body class="@yield('page-name')">
  <x-navigation />
  <main class="@yield('page-name') without-sidedar">
    @yield('content')
  </main>
  @yield('map')
  <x-footer />
  @yield('page_specific_js')
<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

@elseif(\Request::is('bonema-track/*') or \Request::is('gallery') or \Request::is('events') or \Request::is('bonema-fleet/*') or \Request::is('bonema-find/*') or \Request::is('bonema-find/*') or \Request::is('bonema-ict/*') or \Request::is('about-us/*') or \Request::is('bonema-asset-tracking/*'))
<body class="@yield('page-name')">
  <x-navigation />
  <main class="@yield('page-name') with-sidebar">
    <div class="sidebar"><x-sidebar /></div>
    <div class="content">@yield('content') </div>  
  </main>
  <x-footer />
  <script src="{{asset('js/app.js')}}"></script>
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

@endif




{{-- <body>
  <x-navigation />
  <div class="content">@yield('content') </div>
  @yield('scripts')
  <script src="{{asset('js/app.js')}}"></script>
</body> --}}
</html>