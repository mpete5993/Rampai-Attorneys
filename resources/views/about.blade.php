@include('layout.header')
            <!-- NAVIGATION LINKS -->
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown "><a href=" {{url('/')}} ">Home <span class=""></span></a>
                  </li>
                  <li class="active"><a href=" {{ url('about') }} ">About</a></li>
                  <li><a href=" {{ route('services.index') }} ">Service</a></li>
                  <li><a href=" {{ route('attorneys.index') }} ">Our Team</a></li>
                  <li class="dropdown"><a href="#">More <span class="caret"></span></a>
                      <!-- dropdown start -->
                      <ul class="dropdown-menu">
                          <li><a href="{{ route('practice_areas.index') }}">Practice Areas List</a></li>
                          <li><a href="{{ url('attorneys') }}">Attorney List</a></li>
                          <li><a href="{{ url('admin.galleries.index') }}">Gallery 1</a></li>
                          <li><a href="{{ url('testimonials') }}">Testimonials</a></li>
                      </ul>
                  </li>
                  <li><a href=" {{ url('contact') }} ">Contact</a></li>
                  <li>
                      <span class="calltxt">
                          <i class="fa fa-phone" aria-hidden="true"></i> 051 430 1065
                      </span>
                  </li>
              </ul>
          </div>
      </div>
  </div>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">About Us</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>About Us</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="innerpgWraper">
  <div class="container">
    <div class="about-desc">
      <div class="row">
        <div class="col-md-7">
          <h3>Fusce consequat elit eget</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, lorem nec posuere venenatis, nisi tellus rutrum ante, quis faucibus orci turpis in purus. Morbi quis facilisis massa, ac finibus quam. Maecenas luctus tempor eros, et lacinia eros venenatis a. Aliquam erat volutpat. Praesent aliquet dapibus lacus ut iaculis. Nulla tempor lorem a enim commodo facilisis. Quisque feugiat, nisi in volutpat ornare, orci nunc dictum risus, non mattis justo erat nec ante. Quisque feugiat ligula metus, et efficitur augue commodo ultrices. <br>
            <br>
            Curabitur nunc tellus, dapibus eu porttitor at, dictum vitae lacus. Nam euismod venenatis magna, vulputate pharetra neque porttitor quis. In lectus lorem, auctor ut posuere et, faucibus eu quam. Nullam ut lacus in neque malesuada placerat. Aenean convallis aliquam ipsum quis lobortis. Sed eleifend, est nec lacinia dapibus, magna ligula laoreet quam, dictum porta lectus dui quis dolor. Donec ac est in ex mattis luctus. Vivamus congue rhoncus erat tempus imperdiet. Maecenas eu purus interdum, pretium libero eu, rutrum sapien. Nam ullamcorper euismod nunc, non eleifend risus fermentum quis. Curabitur nec interdum est.</p>
        </div>
        <div class="col-md-5">
          <div class="postimg"><img src="images/about-img.jpg"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Team -->
<div id="team" class="parallax-section">
  <div class="container"> 
    
    <!-- Dection Title -->
    <div class="section-title">
      <h3>Our Attorneys <span>Team</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="row"> 
      <!-- team 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img1.jpg" class="animate" alt=""></div>
          <h4>JOHN DOE</h4>
          <h5>Personal Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
      
      <!-- team 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img2.jpg" class="animate" alt=""></div>
          <h4>JASON DOE</h4>
          <h5>Criminal Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
      
      <!-- team 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img3.jpg" class="animate" alt=""></div>
          <h4>JANE DOE</h4>
          <h5>Family Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
      
      <!-- team 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img4.jpg" class="animate" alt=""></div>
          <h4>MARTIN DOE</h4>
          <h5>Employment Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


@include('layout.footer')