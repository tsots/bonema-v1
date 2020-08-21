@extends('layouts.sidebar')

@section('page-class', 'about-us')
@include('inc/about-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">COMPANY PROFILE</h1> --}}
  <h2 class="sub-heading">Who we are</h2>
  <p>
    We are an ICT company with core specialization in asset and performance
    monitoring expertize, offering tailor made solutions to suit individual
    clients. Our devices and systems monitor assets and their performance, using
    the latest in satellite technology and asset registry software, simplified
    to communicate to our clients on Internet and SMS platforms.
  </p>
  <p class="highlight">
    We extended our Service Offering to include the manufacturing of
    Transformers and PCB contract manufacturing customized to the clients
    specifications. This will fall under the Bonema Engineering.
  </p>

  <br /><br />
  <h2 class="sub-heading">What we do</h2>
  <p>
    Our products offer a user centric experience, making the user of the service
    in full control of the monitoring. We believe that the customer should have
    the right and power to select the types of alerts, performance reports and
    parameters their assets should adhere to. We meet the client’s needs.</p>
    <p>
    Our solutions offer both online and offline services. The user is always
    assured of performance at all times, at a click of a button, as they have
    access to the monitoring platform 24/7/365.
  </p>
  <p>
    The continued relationship established with our international partners keeps
    us abreast of any changes and advancements in technologies, which makes us
    of world class standard.
  </p>
  <p>
    Bonema Technologies (Pty) Ltd is one of the few 100% black-owned and managed
    Telematics Companies in South Africa. We are Industry Accredited and
    Insurance Approved endorsed by all major insurance companies. Our devices
    have been developed and designed as per their IPs.
  </p>
  <p>
    The key to our success is to make all our operations simpler for our
    clients. Our products are the most flexible and user-friendly in the
    industry.
  </p>
  <p>
    Bonema Technologies (Pty) Ltd prides itself in having the fastest real time
    tracking in South Africa. We have received a 10 out of 10 accreditation
    Insurance approval rating, which proves we have the best technology.
  </p>
  <p>
    We also aim to be the best in tailor made, client specific Asset and
    performance monitoring solutions in the industry. We see our clients as
    individual clients with different needs. We believe that our customers
    deserve to see what they are paying for. Transparency is our strength.
  </p>
</div>
@endsection