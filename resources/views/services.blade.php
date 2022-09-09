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
<div id="practicearea" class="innerpgWraper">
  <div class="container">
    <div class="row">
        <div class="col-12">
            <!--Section Title Start-->
            <div class="section-title text-center mb-70" id="service-header">
                <h2>Provide best services <br> <span>Because!!</span> We are best Lawyers</h2>           
               </div>
            <!--Section Title End-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h4>Our Services</h4>
        </div>
        @foreach ($services as $service)
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="prac-area-list">
                    <span><i class="fa fa-arrow-right"></i></span>
                    <a href=" {{ route('practice_area.show', $service->slug)}} "> {{$service->name}} </a>
            </div>
        </div>
        @endforeach
        
    </div>
  </div>
</div>

@include('layout.footer')