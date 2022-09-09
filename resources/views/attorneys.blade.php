@include('layout.header')

            <!-- NAVIGATION LINKS -->
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a href=" {{url('/')}} ">Home <span class=""></span></a>
                  </li>
                  <li><a href=" {{ url('about') }} ">About</a></li>
                  <li><a href=" {{ route('services.index') }} ">Service</a></li>
                  <li class="active"><a href=" {{ route('attorneys.index') }} ">Our Team</a></li>
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
                <h1 class="page-heading">Our Expert Attorneys</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="#.">Home</a> / <span>Attorneys</span></div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title End -->

<div class="parallax-section">
    <div class="container">
        <div class="row">
            <!-- team 1 -->
            @if ($attorneys->count() > 0)
                @foreach ($attorneys as $attorney)
                    <div class="col-md-3 col-sm-6">
                        <div class="team-thumb">
                            <div class="thumb-image">
                                <a href="{{ route('attorney.show', $attorney->slug) }}">
                                    <img src="{{ asset($attorney->image) }}" class="animate"
                                        alt="{{ $attorney->name }}">
                                </a>
                            </div>
                            <h4><a href="{{ route('attorney.show', $attorney->slug) }}">{{ $attorney->user->name }}</a>
                            </h4>
                            <h5> {{ $attorney->practiceAreas()->get()->pluck('name')->first() }} </h5>
                            <ul class="list-inline social">
                                @if ($attorney->facebook != 0)
                                    <li> <a href=" {{ $attorney->facebook }} "><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a> </li>
                                @endif
                                @if ($attorney->linkedIn != 0)
                                    <li> <a href=" {{ $attorney->linkedIn }} "><i class="fa fa-linkedin"
                                                aria-hidden="true"></i></a> </li>
                                @endif
                                @if ($attorney->twitter != 0)
                                    <li> <a href=" {{ $attorney->linkedIn }} "><i class="fa fa-linkedin"
                                                aria-hidden="true"></i></a> </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="">
                    <span> No attorneys yet</span>
                </div>
            @endif
        </div>
        <div class="">{{ $attorneys->links() }}</div>
    </div>
</div>


@include('layout.footer')
