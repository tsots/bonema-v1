<footer>
    <div class="footer-navigation">
        <div class="footer-navigation__container">
          <div class="column">
            <h3>BONEMA TRACK</h3>
            <ul>
              <li><a href="{{route('track-reports')}}">Reports</a></li>
            <li><a href="{{route('track-driverId')}}">Driver ID</a></li>
            <li><a href=" {{route('track-dashboards')}} ">Dashboards</a></li>
                      <li><a href=" {{route('track-maintenance')}} ">Fleet Maintenance</a></li>
                      <li><a href=" {{route('track-alerts')}} ">Real Time Alerts</a></li>
                      <li><a href=" {{route('track-support')}} ">Setup &amp; Support</a></li>
            <li><a href="#">Get A Demo</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>BONEMA FIND</h3>
            <ul>
              <li><a href=" {{route('find-reports')}} ">Reports</a></li>
                      <li><a href=" {{route('find-dashboards')}} ">Dashboards</a></li>
                      <li>
                        <a href=" {{route('find-alerts')}} ">Real Time Alerts</a>
                      </li>
                      <li>
                        <a href=" {{route('find-support')}} ">Setup &amp; Support</a>
                      </li>
                      <li><a href="#">Get A Demo</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>BONEMA FLEET</h3>
            <ul>
              <li><a href=" {{route('fleet-reports')}} ">Reports</a></li>
              <li><a href=" {{route('fleet-driverId')}} ">Driver Id</a></li>
              <li><a href=" {{route('fleet-dashboards')}} ">Dashboards</a></li>
              <li><a href=" {{route('fleet-maintenance')}} ">Fleet Maintenance</a></li>
              <li><a href=" {{route('fleet-alerts')}} ">Real Time Alerts</a></li>
              <li><a href=" {{route('fleet-support')}} ">Setup &amp; Support</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>BONEMA ICT</h3>
            <ul>
              <li><a href=" {{route('ict-system')}} ">System &amp; Platforms</a></li>
              <li><a href=" {{route('ict-comms')}} ">Comms &amp; Networks</a></li>
              <li><a href=" {{route('ict-application')}} ">Application Deployment</a></li>
              <li><a href=" {{route('ict-service')}} ">Professional Service</a></li>
              <li><a href=" {{route('ict-security')}} ">ICT Security</a></li>
              <li><a href=" {{route('ict-cloud')}} ">Cloud Services</a> </li>
              <li><a href=" {{route('ict-sage')}} ">Sage Solutions</a></li>
              <li><a href=" {{route('ict-outsourcing')}} ">IT Outsourcing</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Bonema Asset Tracking</h3>
            <h3>Downloads</h3>
            <a href="">Product Features</a>
          </div>
        </div>
      </div>
      <div class="social-media">
        {{-- <ion-icon name="logo-facebook"></ion-icon> --}}
        
      <ion-icon src="{{asset('images/icons/logo-facebook.svg')}}"></ion-icon>
      <ion-icon src="{{asset('images/icons/logo-twitter.svg')}}"></ion-icon>
      <ion-icon src="{{asset('images/icons/_ionicons_svg_logo-linkedin.svg')}}"></ion-icon>
      </div>
      <div class="copyright">
          <p>Copyright &copy; {{date('Y')}}</p>
      </div>
</footer>