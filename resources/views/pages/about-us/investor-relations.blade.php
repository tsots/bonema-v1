@extends('layouts.sidebar')

@section('page-class', 'about-us')
@include('inc/about-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">INVESTOR RELATIONS</h1> --}}
  <h2 class="sub-heading">Overview</h2>
  <p>
    Bonema Technologies (Pty) Ltd is a self funded family business, with no
    external debt and attracts quality staff due to its first to market
    innovations and creative management style. We are always working on making
    the workforce/place/asset efficient and productive, introducing responsive
    and value adding solutions fit for any organisation or individual user.
  </p>

  <br /><br />
  <h2 class="sub-heading">The Birth of Bonema</h2>
  <p>
    BONEMA stands for BO-KANG NE-O MA-EMILI (BO-NE-MA), a family of 3
    entrepreneurs and business professionals.
    <br />
  </p>
  <p>
    In 2014 Bokang developed the first Bonema Track, a real time tracking device
    that passed insurance certification with a perfect score, under both
    tracking and recovery. Bonema Track by then already had 10s data upload
    capability, pinpoint accuracy upto 5m and communicated on multiple gateways
    to counter signal jamming and inaccurate data reporting of false positives.
    This was just the start of more innovation with more in-housed product
    solutions for fleets, assets, POS solutions and voltage stabilizers.</p>
    <p>
    We continue to persevere despite the environment being positioned to deter
    new entrants in the highly regulated and monopolized telematics and IT asset
    management industries. Our innovations speak for themselves; Bonema
    Tracking, Bonema Fleet Solutions, Bonema Fuel Management, Bonema FleetCam
    Solutions and our latest Bonema Asset Manager with The Bonema Magic Wand.</p>
    <p>
    The Bonema Magic Wand is a wireless Scanner tool that reads and reconciles
    assets in a location in seconds. The latest Bonema innovation cuts down the
    asset verification process to a tenth. Our barcode scanning tool allows you
    scan all assets simultaneously at the entrance of each location, without
    bending over or lifting a finder.</p>
    <p>
    Imagine an Asset Management software system that pulls the below reports and
    reconciles them against the previous audit/maintenance, while reporting on
    deviations/descrapencies by JUST waving The Bonema Magic Wand across the
    room IN A MATTER OF SECONDS.. Well look no further Bonema Asset Manager is
    here.
  </p>

  <ul class="other">
    <li>Activity Report</li>
    <li>Audit Log</li>
    <li>Depreciation Report</li>
    <li>License Report</li>
    <li>Asset Maintenance Report</li>
    <li>Unaccepted Assets</li>
    <li>Accessory Report</li>
    <li>Custom Asset Report</li>
    <li>Requestable</li>
    <li>Variance Report</li>
  </ul>
</div>
@endsection