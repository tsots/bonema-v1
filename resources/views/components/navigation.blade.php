<header>
    <div class="container">
      <nav>
        <div class="logo"><a href="{{ route('page-home') }}">Katalist</a></div>
        <div class="contact">
          <h1>Hello there</h1>
          <li class="move-right btn"><a href="#">Book a table</a></li>
        </div>
        <ul class="nav-list">
          <li class="{{ Route::is('page-home') ? 'active' : '' }}"><a href="{{ route('page-home') }}">Home</a></li>
          <li>
            <a href="#"
              >Products
              <i class="icon ion-android-arrow-dropdown"></i>
            </a>
            <ul class="sub-menu">
              <li><a href="#">Bonema Track<i class="icon ion-android-arrow-dropdown"></i></a>
                <ul class="sub-menu">
                  <li><a href="{{route('track-reports')}}">Reporting</a></li>
                  <li><a href="{{route('track-dashboards')}}">Dashboards</a></li>
                  <li><a href="{{route('track-maintenance')}}">Maintenance</a></li>
                      <li><a href="{{route('track-driverId')}}">Driver Id</a></li>
                      <li><a href="{{route('track-alerts')}}">Real Time Alerts</a></li>
                      <li><a href="{{route('track-support')}}">Setup And Support</a></li>
                  </ul>
              </li>
              <li>
                <a href="#"
                  >Bonema Find
                  <i class="icon ion-android-arrow-dropdown"></i>
                </a>
                <ul class="sub-menu">
                  <li><a href="{{route('find-reports')}}">Reporting</a></li>
          <li><a href="{{route('find-dashboards')}}">Dashboards</a></li>
          <li><a href="{{route('find-alerts')}}">Real Time Alerts</a></li>
          <li><a href="{{route('find-support')}}">Setup And Support</a></li>
              </ul>
              </li>
              <li>
                <a href="#"
                  >Bonema Fleet
                  <i class="icon ion-android-arrow-dropdown"></i>
                </a>
                <ul class="sub-menu">
                  <li><a href="{{route('fleet-reports')}}">Reporting</a></li>
              <li><a href="{{route('fleet-dashboards')}}">Dashboards</a></li>
              <li><a href="{{route('fleet-maintenance')}}">Maintenance</a></li>
                  <li><a href="{{route('fleet-driverId')}}">Driver Id</a></li>
                  <li><a href="{{route('fleet-alerts')}}">Real Time Alerts</a></li>
                  <li><a href="{{route('fleet-support')}}">Setup And Support</a></li>
              </ul>
              </li>
              <li><a href="{{route('asset-tracking')}}">Bonema Asset Tracking</a></li>
              <li>
                <a href="#"
                  >Bonema Ict
                  <i class="icon ion-android-arrow-dropdown"></i>
                </a>
                <ul class="sub-menu">
                  <li><a href="{{route('ict-system')}}">System And Platforms</a></li>
                        <li><a href="{{route('ict-application')}}">Application Deployment</a></li>
                    <li><a href="{{route('ict-cloud')}}">Cloud Services</a></li>
                    <li><a href="{{route('ict-comms')}}">Comms & Networks</a></li>
                        <li><a href="{{route('ict-security')}}">ICT Security</a></li>
                        <li><a href="{{route('ict-outsourcing')}}">IT Outsourcing</a></li>
                        <li><a href="{{route('ict-service')}}">Professional Services</a></li>
                        <li><a href="{{route('ict-sage')}}">Sage Solutions</a></li>
              </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{route('page-gallery')}}">Gallery</a></li>
            <li><a href="{{route('about-profile')}}">About
                <i class="icon ion-arrow-down-b"></i>
                </a>
                <ul class="sub-menu">
                    {{-- <li><a href="{{route('about')}}">About Us</a></li> --}}
                        <li><a href="{{route('about-profile')}}">Company Profile</a></li>
                        <li><a href="{{route('about-relations')}}">Investor Relations</a></li>
                        <li><a href="{{route('about-team')}}">Leadership Team</a></li>
                </ul></li>
            <li class="{{ Route::is('page-events') ? 'active' : '' }}"><a href="{{route('page-events')}}">Events</a></li>
            <li><a href="{{route('page-support')}}">Support</a></li>
            <li><a href="{{route('page-contact')}}">Contact</a></li>
        </ul>
        <div class="menu-icons">
          <i class="icon ion-android-menu"></i>
          <i class="icon ion-close"></i>
        </div>
      </nav>
    </div>
  </header>