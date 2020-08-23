<header>
    <div class="container">
      <nav>
        <div class="logo"><a href="{{ route('page-home') }}">
          <img class="logo-img" src="{{asset('images/img/Logo.svg')}}" alt=""></a>
        </div>
        <div class="contact">
          <h1>Call us today: +27 11 655 4190 <span>|</span> <span>Accounts: 0861 BONEMA</span></h1>
          <li class="move-right btn"><a href="#">Customer Login</a></li>
          <li class="move-right btn"><a href="#">Fleet Login</a></li>
        </div>
        <ul class="nav-list">
          <li><a href="{{ route('page-home') }}">Home</a></li>
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
                <a class="{{ (request()->is('bonema-ict*')) ? 'active' : '' }}" href="#"
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
                        <li class="{{ Route::is('ict-service') ? 'active-bg' : '' }}"><a class="{{ Route::is('ict-service') ? 'active' : '' }}" href="{{route('ict-service')}}">Professional Services</a></li>
                        <li><a href="{{route('ict-sage')}}">Sage Solutions</a></li>
              </ul>
              </li>
            </ul>
          </li>

          @if (\Request::is('bonema-ict/*', 'active')) 
          
          @endif
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