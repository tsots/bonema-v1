@extends('layouts.sidebar')

@section('page-class', 'about-us')
@section('page-name', 'leadership-team')
@include('inc/about-sidebar')

@section('content')
<h1>{{$title}}</h1>

<div class="leader">
  <div class="image">
    <img src="{{asset('img/leader__maemili.jpg')}}" alt="">
  </div>
  <div class="details">
    <h3>Maemili Ramataboe</h3>
  {{-- <div class="spacer"></div> --}}
  <p>Non-Executive</p>
  <p class="bio-desktop">
    Maemili brings to Bonema Technologies the much needed business executive
and administrative expertise. Her vast experience stretches over a period
of 41 years.</p>
<p class="bio">
Among numerous other important positions Maemili also holds the following
note worthy offices:
  </p>
  <div class="leader__archievements">
    <h2 class="sub-heading">Archievements</h2>
    <ul>
      <li>
        Deputy Chairperson TCTA (Trans-Caledon Tunnel Authority)
      </li>
      <li>
        Deputy Chairperson CSOS (Community Schemes Ombud Service)
      </li>
      <li>Non-Executive Director at U-Bank</li>
      <li>
        Member of Advisory Board GPAA (Government Pensions Administration
        Agency
      </li>
      <li>Member of Council TUT (Tswane University Of Technology)</li>
    </ul>
  </div>
  <div class="leader__qualifications">
    <h2 class="sub-heading">
      Maemili has the following qualifications:
    </h2>
    <ul>
      <li>Chartered Accountant (Lesotho)</li>
      <li>
        Masters in Business Administration (University of Free State)
      </li>
      <li>
        Accredited Associate of the Institute of Independent Business (United
        Kingdom)
      </li>
      <li>
        Maemili also sits on numerous boards, holds several Chairmanships and
        Profession Memberships
      </li>
    </ul>
  </div>
  </div>
</div>


<div class="leader">
  <div class="image">
    <img src="{{asset('img/leader__bokang.jpg')}}" alt="">
  </div>
  <div class="bio">
    <h3>Bokang Mosala</h3>
  {{-- <div class="spacer"></div> --}}
  <p>Chairman</p>
  <p class="bio-desktop">
    Bokang has been directly involved in the Utility and Energy Management
      industry for more than 8 years and it is through this experience in
      remote data verification and asset performance monitoring that makes him
      a suitable candidate for this position. As Head of Operations Bokang
      provides Bonema Technologies (pty) Ltd with the necessary industry know
      how.</p>
      <p class="bio">Bokang began his career in the banking industry as Marketing
      Consultant for FNB Private Clients. His unrivalled commitment, interest
      in technology and product knowledge saw him change industries and move
      into Electricity Supply and Energy management. He became Public
      Relations Officer for the Remig Group and within 3 years in the company
      he was Head of Operations for the ABSA Bank Utility and Energy
      management portfolio. He was promoted to Head of Utilities and Energy
      Management in the Remig Group, managing bulk payments in excess of R1
      Billion in his tenure.</p>
      <p class="bio">He has worked with Major industry role players such as Redefine Properties, Arrowhead Properties, ABSA Bank,
      Netelek, Rural Maintenance and Eskom.</p>
      <p class="bio">Bokang was involved in the automating of the ABSA Bank Bulk account payments process. Bokang’s
      commitment to the Remig Group saw him become a member of several
      committees within the company: Software Development, Technical
      Administration and the Head of Department committees. Bokang stayed with
      the Remig Group as Head of Utilities and Energy Management before he
      founded Bonema Technologies (Pty) Ltd.
  </p>

  <div class="leader__qualifications">
    <h2 class="sub-heading">
      Bokang has the following qualifications:
    </h2>
    <ul>
      <li>BCom Marketing and Economics (UNISA)</li>
      <li>BCom Honours Business Management (UNISA)</li>
      <li>
        CAPM enrolled (Project Management Institute, California)
      </li>
      <li>PSIRA Grade E-B</li>
    </ul>
  </div>
  </div>
</div>


<div class="leader">
  <div class="image">
    <img src="{{asset('img/leader__rebaone.jpg')}}" alt="">
  </div>
  <div class="bio">
    <h3>Rebaone Kgobokoe</h3>
  {{-- <div class="spacer"></div> --}}
  <p>Non-Executive</p>
  <p class="bio-desktop">
    Rebaone ensures that Bonema Technologies (Pty) Ltd is compliant with all
      industry related legislation, codes and standards primarily on a
      consultancy basis. Over and above this Rebaone provides a specialised
      legal advisory service to Bonema Technologies (Pty) Ltd on an ad hoc
      basis.</p>
      <p class="bio">currently holds the position of Legal Consultant at
      My Finance Partner. Prior to joining My Finance Partner, Rebaone was a
      Legal Officer at Grindrod Bank Limited and AEL Mining Services
      (Modderfontein) after having completed his articles of clerkship at
      Gildenhuys Malatji Attorneys (Pretoria).
  </p>

  <div class="leader__qualifications">
    <h2 class="sub-heading">
      Rebaone has the following qualifications:
    </h2>
    <ul>
      <li>Bcom Law (University of Pretoria)</li>
      <li>LLB (University of Pretoria)</li>
    </ul>
  </div>
  </div>
</div>

@endsection