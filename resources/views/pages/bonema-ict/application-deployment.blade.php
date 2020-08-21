@extends('layouts.app')

@section('page-class', 'bonema-ict')

@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">APPLICATION DEPLOYMENT</h1> --}}
  
  <section>
    <h2 class="sub-heading">Enterprise Information Management</h2>
    <p>
      The management of information within organisations has become a
      very important part of any operation. Different documents, coming
      from various sources and having levels of confidentiality which
      depend on their nature, today requires specific tools for their
      effective management. Bonema Technologies focuses on EIM working
      with best of class solutions from Documentum and Microsoft.<br />Delivering
      the right information to the right people on time is a critical
      factor in the success of any business. Bonema Technologies
      provides Business Intelligence, Data Analytics and Reporting
      solutions based on Microsoft technology through its experienced
      team.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Business Process Automation</h2>
    <p>
      The efficient operations of a company need to today rely on
      automating processes and integrating these within the office
      productivity and communications tools. Using Microsoft’s
      SharePoint suite of products Bonema Technologies will deliver
      solutions designed on clients requirements. The solutions will
      help clients automate processes, keep track of operations, and
      present key internal data as meaningful business information.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Systems Integration</h2>
    <p>
      Solutions built to meet business requirements usually entail the
      integration of a number of products and technologies from
      different suppliers as well as with systems already deployed.
      Ensuring that systems can “talk to each other” allows for the
      proper management of business processes, the common handling of
      customer data and company wide business intelligence. Bonema
      Technologies has the expertise to design and develop the required
      software to integrate complex solutions.
    </p>
  </section>
</div>

@endsection