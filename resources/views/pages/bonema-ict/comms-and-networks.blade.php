@extends('layouts.sidebar')

@section('page-class', 'bonema-ict')

@include('inc/ict-sidebar')

@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">COMMS &amp; NETWORKS</h1> --}}
  
  <section>
    <h2 class="sub-heading">Unified Communications</h2>
    <p>
      Unified Communications platforms offer one seamless interface to
      modern day business communication and collaboration needs. They
      integrate voice, video conferencing, e-mail, and instant messaging
      in one environment, which can be accessed in the office and via
      mobile devices. Integrating with other business applications, a
      unified communications set-up is today critical for businesses to
      improve their efficiency and be able to respond within expected
      timeframes.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Routing and Switching</h2>
    <p>
      The Bonema Technologies team has years of experience in the
      deployment of LAN and WANs and can handle projects which range
      from the IP requirements of a small business to the full
      implementation of large complex networks
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Network Security</h2>
    <p>
      Networks carry internal confidential data. Malicious attacks can
      not only get access to this data but also cause downtime to
      various elements of an operation. Building security into a
      network, and ensuring that it is maintained is a complex task, and
      needs to be given its due attention. Bonema Technologies has the
      competence and experience to guide our clients on the best way to
      ensure that their networks are secure.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Network Monitoring and Management</h2>
    <p>
      Proper monitoring and management of network assets is important in
      keeping in control of traffic and network utilisation. It allows
      for proper usage and provisioning of different network assets to
      groups of users or particular applications. It also ensures proper
      investment decisions are taken on time to ensure that the network
      is being scaled to the growth requirements of the organisation.
    </p>
  </section>
</div>

@endsection