@extends('layouts.sidebar')

@section('page-class', 'bonema-ict')

@include('inc/ict-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">SYSTEMS &amp; PLATFORMS</h1> --}}
  
  <section>
    <h2 class="sub-heading">Server Clusters</h2>
    <p>
      Working with the market leaders in the delivery of enterprise
      servers HP and Oracle/SUN, Bonema Technologies provides a complete
      range of servers and platforms. Ranging from standalone servers to
      complex blade arrays and business critical systems, HP and SUN
      blend leading technology with the experience of leading
      manufacturers. Running various flavours of Unix and Microsoft
      operating systems, the platforms come with a various monitoring
      and management software which makes operations easier to handle
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Virtualisation</h2>
    <p>
      Every enterprise today needs to consider virtualised systems
      environments. This not only saves on capital investments, but also
      on energy, operations and support. Virtualisation offers a higher
      level of resiliency and backup, and makes complex server
      environments easy to manage. Working with RedHat, VMware and
      Microsoft, Bonema Technologies offer design, implementation and
      support of virtualised server and desktop environments.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Storage Management</h2>
    <p>
      With the data requirements of enterprises growing dramatically
      over the last years, managing storage deployment and support has
      become an increasingly complex and costly requirement. HP, SUN and
      Hitachi are three of the leaders we work with in the deployment of
      storage solutions which can cater for small business but can also
      scale to data centre requirements. Bonema Technologies will
      provide assistance in the design and deployment of such set-ups,
      making sure that the appropriate security and resilience is built
      into the systems
    </p>
  </section>
</div>

@endsection