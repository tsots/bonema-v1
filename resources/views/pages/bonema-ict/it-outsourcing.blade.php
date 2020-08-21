@extends('layouts.sidebar')

@section('page-class', 'bonema-ict')

@include('inc/ict-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">IT OUTSOURCING</h1> --}}
  
  <section>
    <h1>Sage Accounting and ERP Solutions</h1>
    <h2 class="sub-heading">Securing and validating your backups</h2>
    <p>
      Having IT up and running on a 24 hour basis has become critical
      for most organisations. To be able to do that effectively, and
      with a clear return on investment is not easy. IT has become
      complex, and requires expertise in various areas; applications,
      servers, virtualisation, disaster recovery, storage, networking
      and security. Trying to do all this internally is no longer an
      option for smaller companies.<br />
      At Bonema Technologies we have an operational team who are focused
      on providing these services to different sized organisations. The
      team can some in at various levels, from offering specific
      consulting and 2nd level support to existing teams, to taking over
      the complete IT operations. The ICT team can also come in to help
      companies develop a strategic view to IT deployment, making sure
      that they are aligning their investments to business requirements.
    </p>
  </section>
  <section class="boxes">
    <div class="boxes">
      <div class="boxes box__1">ICT Strategic Consulting</div>
      <div class="boxes box__2">ICT Service Management</div>
      <div class="boxes box__3">Desktop Support</div>
      <div class="boxes box__4">Application Support</div>
      <div class="boxes box__5">Infrastructure support</div>
      <div class="boxes box__6">Supplier Maintenance Agreements</div>
    </div>
  </section>
</div>

@endsection