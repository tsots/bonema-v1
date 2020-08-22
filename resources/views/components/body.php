<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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