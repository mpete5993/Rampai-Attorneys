@include('layout.header')            <!-- NAVIGATION LINKS -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href=" {{url('/')}} ">Home <span class=""></span></a>
        </li>
        <li><a href=" {{ url('about') }} ">About</a></li>
        <li class="active"><a href=" {{ route('services.index') }} ">Service</a></li>
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
        <h1 class="page-heading">Services</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Services</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- section -->
<div id="practicearea" class="parallax-section">
  <div class="container">
    <div class="section-title">
        <h3>Practice <span>Areas</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam.</p>
      </div>
      <div class="row">
          <!-- Service 1 -->
          @foreach ($practice_areas as $practice_area)
              <div class="col-md-4 col-sm-6">
                  <div class="service-thumb">
                      <div class="thumb-img">
                          <a href="{{ route('practice_area.show', $practice_area->slug) }} ">
                              <img src=" {{ asset($practice_area->image) }}" class="animate" alt="">
                          </a>
                      </div>
                      <h4>
                          <a href=" {{ route('practice_area.show', $practice_area->slug) }}">
                              {{ $practice_area->name }}</a>
                      </h4>
                      {!! Str::limit($practice_area->description, 50) !!}
                  </div>
              </div>
          @endforeach

      </div>
      {{ $practice_areas->links() }}
  </div>
</div>

@include('layout.footer')