@include('layout.header')

            <!-- NAVIGATION LINKS -->
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
                          <li><a href="{{ url('admin.galleries.index') }}">Galleries</a></li>
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
        <h1 class="page-heading">Practice Area Detail</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Practice Area Detail</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    <!-- Blog start -->
    <div class="row">
      <div class="col-md-8"> 
        <!-- Blog List start -->
        <div class="blogWraper">
          <div class="blogList blogdetailbox">
            <div class="postimg">
              <img src=" {{asset($practice_area->image)}} " alt="Blog Title" width="100%"> 
            </div>
            <div class="post-header margin-top30">
              <h4> {{$practice_area->name}} </h4>
            </div>
            {!!$practice_area->description!!}
          
          </div>
        </div>
      </div>
      <div class="col-md-4"> 
        <!-- Side Bar -->
        <div class="sidebar"> 
          <!-- Search -->
          <div class="widget">
            {{-- <h5 class="widget-title">Search</h5>
            <div class="search">
              <form>
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
              </form>
            </div> --}}
          </div>
          <!-- Categories -->
          <div class="widget">
            <h5 class="widget-title">Practice Areas</h5>
            <ul class="categories">
              @foreach ($practice_areas as $item)
              <li><a href=" {{ route('practice_area.show', $item->slug)}} "> {{$item->name}} </a></li>
              @endforeach
            </ul>
          </div>
          <!-- Tags -->
          {{-- <div class="widget">
            <h5 class="widget-title">Tags</h5>
            <ul class="tags">
              <li><a href="#.">Amazing </a></li>
              <li><a href="#.">Envato </a></li>
              <li><a href="#.">Themes </a></li>
              <li><a href="#.">Responsiveness </a></li>
              <li><a href="#.">Developer </a></li>
              <li><a href="#.">Mobile </a></li>
              <li><a href="#.">IOS </a></li>
              <li><a href="#.">Design </a></li>
              <li><a href="#.">Jobs </a></li>
            </ul>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
</div>


@include('layout.footer')