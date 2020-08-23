@extends('layouts.app')

@section('page-class', 'bonema-ict')
@section('page-name', 'ict-security')


@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">ICT SECURITY</h1> --}}
  
  <section>
    <h2 class="sub-heading">ICT Offerings</h2>
    <p>
      In today’s complex environment, businesses need to ensure a 360
      degree protection, safeguarding their assets while maintaining
      flexibility and lowering total-cost-of-ownership. IT
      Administrators need an infrastructure build with all the necessary
      components in order to fulfill the required security policies,
      including
    </p>
  </section>
  <section class="features">
    <h2 class="sub-heading">Features</h2>
    <ul>
      <li>Firewalling</li>
      <li>Secure VPN</li>
      <li>Intrusion Prevention</li>
      <li>Application Control</li>
      <li>Web Content Filtering</li>
      <li>Firewalling</li>
      <li>Data Loss Prevention</li>
    </ul>
    <ul>
      <li>End-Point Protection</li>
      <li>Anti-Spam</li>
      <li>SIEM and Log Management</li>
      <li>Two-Factor Authentication</li>
      <li>Encryption</li>
      <li>End-Point Protection</li>
      <li>Password Management</li>
    </ul>
    <p>
      Bonema Technologies ensures that all aspects of security are
      covered by partnering with the leaders in Security and through the
      implementation of best of breed products and best practices.
    </p>
  </section>
</div>

@endsection