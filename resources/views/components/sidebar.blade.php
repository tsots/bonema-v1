
@if (\Request::is('about-us/*'))  
<h3>ABOUT US</h3>
<ul>
  <li><a href=" {{route('about-profile')}} ">Company Profile</a></li>
<li><a href=" {{route('about-relations')}} ">Investors Relations</a></li>
<li><a href=" {{route('about-team')}} ">Leadership Team</a></li>
<li><a href=" {{asset('img/bonema-company-profile.pdf')}} " download>Download Company Profile</a></li>
</ul>
@endif


@if (\Request::is('bonema-track/*'))  
<h3>BONEMA TRACK</h3>
<ul>
  <li><a href=" {{route('track-reports')}} ">Reports</a></li>
<li><a href=" {{route('track-driverId')}} ">Driver ID</a></li>
<li><a href=" {{route('track-dashboards')}} ">Dashboards</a></li>
<li><a href=" {{route('track-maintenance')}} ">Fleet Maintenance</a></li>
<li><a href=" {{route('track-alerts')}} ">Real Time Alerts</a></li>
<li><a href=" {{route('track-support')}} ">Setup & Support</a></li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif

@if (\Request::is('bonema-find/*'))  
<h3>BONEMA FIND</h3>
<ul>
  <li><a href=" {{route('find-reports')}} ">Reports</a></li>
<li><a href=" {{route('find-dashboards')}} ">Dashboards</a></li>
<li><a href=" {{route('find-alerts')}} ">Real Time Alerts</a></li>
<li><a href=" {{route('find-support')}} ">Setup & Support</a></li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif

@if (\Request::is('bonema-fleet/*'))  
<h3>BONEMA FLEET</h3>
<ul>
  <li><a href=" {{route('fleet-reports')}} ">Reports</a></li>
<li><a href=" {{route('fleet-driverId')}} ">Driver ID</a></li>
<li><a href=" {{route('fleet-dashboards')}} ">Dashboards</a></li>
<li><a href=" {{route('fleet-maintenance')}} ">Fleet Maintenance</a></li>
<li><a href=" {{route('fleet-alerts')}} ">Real Time Alerts</a></li>
<li><a href=" {{route('fleet-support')}} ">Setup & Support</a></li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif

@if (\Request::is('bonema-ict/*'))  
<h3>BONEMA ICT</h3>
<ul>
  
                      <li ><a href=" {{route('ict-system')}} ">System &amp; Platforms</a></li>
                      <li ><a href=" {{route('ict-comms')}} ">Comms &amp; Networks</a></li>
                      <li >
                        <a href=" {{route('ict-application')}} ">Application Deployment</a>
                      </li>
                      <li >
                        <a href=" {{route('ict-service')}} ">Professional Service</a>
                      </li>
                      <li >
                        <a href=" {{route('ict-security')}} ">ICT Security</a>
                      </li>
                      <li >
                        <a href=" {{route('ict-cloud')}} ">Cloud Services</a>
                      </li>
                      <li >
                        <a href=" {{route('ict-sage')}} ">Sage Solutions</a>
                      </li>
                      <li >
                        <a href=" {{route('ict-outsourcing')}} ">IT Outsourcing</a>
                      </li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif
