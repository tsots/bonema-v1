<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>{{config ('app.name')}} | {{$title}}</title>
</head>
<body class="@yield('page-class')">
  <x-navigation />
 
  
   <main>

    @if (\Request::is('/') or \Request::is('bonema-track/*')) 
...@yield('content')
@else
<x-sidebar />
@yield('content')
@endif
  </main>
  @yield('map')

  <footer>
    {{-- @include('inc.footer-navigation')
    <div class="copyright">@include('inc.footer')</div> --}}
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  @yield('scripts')
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>