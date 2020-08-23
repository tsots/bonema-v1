@extends('layouts.app')

@section('page-class', 'bonema-ict')
@section('page-name', 'pro-services')


@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">PROFESSIONAL SERVICES</h1> --}}

  <section>
    <h2 class="sub-heading">ICT Strategic Review</h2>
    <p>
      ICT has today developed from being an element of infrastructure to
      becoming an important part of enterprise strategy. The definition
      and implementation of an enterprise wide strategic ICT roadmap is
      an essential element in the effectiveness and competitiveness of
      any organisation. Bonema Technologies can help organisations in
      this important exercise.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Network Audit and Design</h2>
    <p>
      The Network team can also come in and do an audit of an existing
      set-up and come up with recommendations for the improvement of the
      current set-up.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Business Application Review</h2>
    <p>
      Many companies have grown organically and have deployed over a
      number of years, various legacy software applications coming from
      numerous suppliers and on different platforms. This has led to
      situation were maintenance costs are high, there is a lot of
      manual re-inputting of data between systems, there are a number of
      customer databases, and it is difficult to get a high level
      management view of the operation. Bonema Technologies has
      experience in analysing existing set-ups and in then recommending
      a roadmap for the implementation of next generation solutions.
    </p>
  </section>
</div>
</main>
</div>

@endsection