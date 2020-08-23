
@if (\Request::is('about-us/*'))  
<h3>ABOUT US</h3>
<ul>
  <li><a class="{{ Route::is('about-profile') ? 'active' : '' }}" href=" {{route('about-profile')}} ">Company Profile</a></li>
<li><a class="{{ Route::is('about-relations') ? 'active' : '' }}" href=" {{route('about-relations')}} ">Investors Relations</a></li>
<li><a class="{{ Route::is('about-team') ? 'active' : '' }}" href=" {{route('about-team')}} ">Leadership Team</a></li>
<li><a class="btn-download" href=" {{asset('img/bonema-company-profile.pdf')}} " download>Download Company Profile</a></li>
</ul>
@endif


@if (\Request::is('bonema-track/*'))  
<h3>BONEMA TRACK</h3>
<ul>
  <li><a class="{{ Route::is('track-reports') ? 'active' : '' }}" href=" {{route('track-reports')}} ">Reports</a></li>
<li><a class="{{ Route::is('track-driverId') ? 'active' : '' }}" href=" {{route('track-driverId')}} ">Driver ID</a></li>
<li><a class="{{ Route::is('track-dashboards') ? 'active' : '' }}" href=" {{route('track-dashboards')}} ">Dashboards</a></li>
<li><a class="{{ Route::is('track-maintenance') ? 'active' : '' }}" href=" {{route('track-maintenance')}} ">Fleet Maintenance</a></li>
<li><a class="{{ Route::is('track-alerts') ? 'active' : '' }}" href=" {{route('track-alerts')}} ">Real Time Alerts</a></li>
<li><a class="{{ Route::is('track-support') ? 'active' : '' }}" href=" {{route('track-support')}} ">Setup & Support</a></li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif

@if (\Request::is('bonema-find/*'))  
<h3>BONEMA FIND</h3>
<ul>
  <li><a class="{{ Route::is('find-reports') ? 'active' : '' }}" href=" {{route('find-reports')}} ">Reports</a></li>
<li><a class="{{ Route::is('find-dashboards') ? 'active' : '' }}" href=" {{route('find-dashboards')}} ">Dashboards</a></li>
<li><a class="{{ Route::is('find-alerts') ? 'active' : '' }}" href=" {{route('find-alerts')}} ">Real Time Alerts</a></li>
<li><a class="{{ Route::is('find-support') ? 'active' : '' }}" href=" {{route('find-support')}} ">Setup & Support</a></li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif

@if (\Request::is('bonema-fleet/*'))  
<h3>BONEMA FLEET</h3>
<ul>
  <li><a class="{{ Route::is('fleet-reports') ? 'active' : '' }}" href=" {{route('fleet-reports')}} ">Reports</a></li>
<li><a class="{{ Route::is('fleet-driverId') ? 'active' : '' }}" href=" {{route('fleet-driverId')}} ">Driver ID</a></li>
<li><a class="{{ Route::is('fleet-dashboards') ? 'active' : '' }}" href=" {{route('fleet-dashboards')}} ">Dashboards</a></li>
<li><a class="{{ Route::is('fleet-maintenance') ? 'active' : '' }}" href=" {{route('fleet-maintenance')}} ">Fleet Maintenance</a></li>
<li><a class="{{ Route::is('fleet-alerts') ? 'active' : '' }}" href=" {{route('fleet-alerts')}} ">Real Time Alerts</a></li>
<li><a class="{{ Route::is('fleet-support') ? 'active' : '' }}" href=" {{route('fleet-support')}} ">Setup & Support</a></li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif

@if (\Request::is('bonema-ict/*'))  
<h3>BONEMA ICT</h3>
<ul>
  
    <li><a class="{{ Route::is('ict-system') ? 'active' : '' }}" href=" {{route('ict-system')}} ">System &amp; Platforms</a></li>
    <li><a class="{{ Route::is('ict-comms') ? 'active' : '' }}" href=" {{route('ict-comms')}} ">Comms &amp; Networks</a></li>
    <li><a class="{{ Route::is('ict-application') ? 'active' : '' }}" href=" {{route('ict-application')}} ">Application Deployment</a></li>
    <li><a class="{{ Route::is('ict-service') ? 'active' : '' }}" href=" {{route('ict-service')}} ">Professional Service</a></li>
    <li><a class="{{ Route::is('ict-security') ? 'active' : '' }}" href=" {{route('ict-security')}} ">ICT Security</a></li>
    <li><a class="{{ Route::is('ict-cloud') ? 'active' : '' }}" href=" {{route('ict-cloud')}} ">Cloud Services</a></li>
    <li><a class="{{ Route::is('ict-sage') ? 'active' : '' }}" href=" {{route('ict-sage')}} ">Sage Solutions</a></li>
    <li><a class="{{ Route::is('ict-outsourcing') ? 'active' : '' }}" href=" {{route('ict-outsourcing')}} ">IT Outsourcing</a></li>
</ul>
<div class="buttons">
  <a class="btn btn-quote" href="#">Get A Quote</a>
  <a class="btn btn-demo" href="#">Get A Demo</a>
</div>
@endif

@if (\Request::is('bonema-asset-tracking/*'))  
<h3>BONEMA ASSET TRACKING</h3>
<ul>
  
    {{-- <li><a class="{{ Route::is('ict-system') ? 'active' : '' }}" href=" {{route('ict-system')}} ">System &amp; Platforms</a></li>
    <li><a class="{{ Route::is('ict-comms') ? 'active' : '' }}" href=" {{route('ict-comms')}} ">Comms &amp; Networks</a></li>
    <li><a class="{{ Route::is('ict-application') ? 'active' : '' }}" href=" {{route('ict-application')}} ">Application Deployment</a></li>
    <li><a class="{{ Route::is('ict-service') ? 'active' : '' }}" href=" {{route('ict-service')}} ">Professional Service</a></li>
    <li><a class="{{ Route::is('ict-security') ? 'active' : '' }}" href=" {{route('ict-security')}} ">ICT Security</a></li>
    <li><a class="{{ Route::is('ict-cloud') ? 'active' : '' }}" href=" {{route('ict-cloud')}} ">Cloud Services</a></li>
    <li><a class="{{ Route::is('ict-sage') ? 'active' : '' }}" href=" {{route('ict-sage')}} ">Sage Solutions</a></li>
    <li><a class="{{ Route::is('ict-outsourcing') ? 'active' : '' }}" href=" {{route('ict-outsourcing')}} ">IT Outsourcing</a></li>
</ul> --}}
<div class="buttons">
  <a class="btn btn-quote" href="#">Bonema Asset Login</a>
  <a class="btn btn-demo" href="#">Get A Free Demo</a>
</div>
@endif
