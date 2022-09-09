@include('layout.header')

<!-- NAVIGATION LINKS -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown active"><a href=" {{ url('/') }} ">Home <span class=""></span></a>
        </li>
        <li><a href=" {{ url('about') }} ">About</a></li>
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
<!-- Revolution slider end -->
<div id="home2" class="parallax-section">
    <!--     <div class="overlay"></div>-->
    <div class="container">
        <div class="slide-text">
            <h3>What we can do? <a href="#" class="typewrite" data-period="2000"
                    data-type="[ &quot;Divorce&quot;, &quot;Defamation&quot;, &quot;Injury&quot;, &quot;Accident&quot;,&quot;Unfair Dismisal&quot; ]"><span
                        class="wrap">Injury</span></a> </h3>
            <h1>Welcome to Rampai Attorneys</h1>
            <p>Lorem ipsum dolor sit amLawyeret, consectetur adipiscing elit. Aliquam suscipit mollis mauris,
                nec ullamcorper leo congue et. Nunc vulputate, felis sed dictum sagittis, lorem enim auctor diam,
                ac laoreet tortor ipsum ac sem.
            </p>
            <a href=" {{ url('contact') }} " class="btn btn-default section-btn">Get Started</a>
        </div>
    </div>
</div>

<!-- About section -->
<div class="howitwrap" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><img src="images/about-us.jpg" alt="" /></div>
            <div class="col-md-8">
                <div class="stcontent">

                    <!-- title start -->
                    <div class="section-title">
                        <h3>Welcome to <span>Rampai - Attorneys</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare
                            feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. </p>
                    </div>
                    <!-- title end -->

                    <ul class="howlist">
                        <!--step 1-->
                        <li>
                            <div class="howbox">
                                <div class="iconcircle"><i class="fa fa-university" aria-hidden="true"></i></div>
                                <h4>Protect Your Rights</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incidid ut labore</p>
                            </div>
                        </li>
                        <!--step 1 end-->

                        <!--step 2-->
                        <li>
                            <div class="howbox">
                                <div class="iconcircle"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                                <h4>Medical Treatment</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incidid ut labore</p>
                            </div>
                        </li>
                        <!--step 2 end-->

                        <!--step 3-->
                        <li>
                            <div class="howbox">
                                <div class="iconcircle"><i class="fa fa-male" aria-hidden="true"></i></div>
                                <h4>We Fight for Justice</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incidid ut labore</p>
                            </div>
                        </li>
                        <!--step 3 end-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Counter Section -->
<div id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="999" data-speed="1000"></span> <span
                        class="counter-text">Trusted Client</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="1512" data-speed="2000"></span> <span
                        class="counter-text">Success Cases</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="1756" data-speed="3000"></span> <span
                        class="counter-text">Case Study</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="101" data-speed="4000"></span> <span
                        class="counter-text">Awards</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Practice Areas section -->
<div id="practicearea" class="parallax-section">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">
            <h3>Practice <span>Areas</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui
                auctor ipsum, sed posuere eros sapien id quam.</p>
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
    </div>
</div>

<!-- Tagline -->
<div class="servicesbox bg1">
    @foreach ($random_practice_area as $random_practice_area)
        <div class="container">
            <div class="section-title">
                <h3> {{ $random_practice_area->name }} </h3>
            </div>
            <div class="ctoggle">
                {!! Str::limit($random_practice_area->description, 200) !!} <br>
                <a href=" {{ route('practice_area.show', $random_practice_area->slug) }} " class="readmore">Read More
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    @endforeach
</div>

<!-- Services Section -->
<div id="service" class="parallax-section">
    <div class="container">
        <div class="section-title">
            <h3>Services <span>We Offer</span></h3>
            <p>We offer best services <span style="color: #db3636;">Because</span> we're best Lawyers.</p>
        </div>
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-thumb">
                    <div class="thumb-icon"><i class="fa fa-car" aria-hidden="true"></i></div>
                    <h4>Car Accident</h4>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-thumb">
                    <div class="thumb-icon"><i class="fa fa-shield" aria-hidden="true"></i></div>
                    <h4>Security Law</h4>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-thumb">
                    <div class="thumb-icon"><i class="fa fa-code" aria-hidden="true"></i></div>
                    <h4>Personal Injury</h4>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-thumb">
                    <div class="thumb-icon"><i class="fa fa-male" aria-hidden="true"></i></div>
                    <h4>Criminal Defence</h4>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-thumb">
                    <div class="thumb-icon"><i class="fa fa-cloud" aria-hidden="true"></i></div>
                    <h4>Brain Injury</h4>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-thumb">
                    <div class="thumb-icon"><i class="fa fa-motorcycle" aria-hidden="true"></i></div>
                    <h4>Motorcycle Accident</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div id="team" class="parallax-section">
    <div class="container">

        <!-- Dection Title -->
        <div class="section-title">
            <h3>Our Attorneys <span>Team</span></h3>
            <p>
                Here's a list of our most experienced & talented Lawyers
            </p>
        </div>
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
                no attorneys
            @endif

        </div>
    </div>
</div>

<!-- Tagline Section -->
<div class="taglinewrap">
    <div class="container">
        <h2>For Consultation</h2>
        <p>
            For Consultation, send us a message and we'll get back to you within 24hrs
        </p>
        <a href=" {{ url('contact') }} "><i class="fa fa-phone" aria-hidden="true"></i> Contact Us Now</a>
    </div>
</div>

<!-- FAQ Section -->

<!-- Testimonials Section -->
<div id="testimonials">
    <div class="container">

        <!-- Section Title -->
        <div class="section-title">
            <h3>Testimonials</h3>
            <p>See What Our Clients Saying!</p>
        </div>
        <ul class="testimonialsList">
            <!-- Client -->
            @if ($testimonials->count() < 0)
                <li class="col-md-6">
                    <p class="text-danger"></p>
                </li>
            @else
                @foreach ($testimonials as $testimonial)
                    <li class="item">
                        <p>"{!! Str::limit($testimonial->content, 100) !!}"</p>
                        <div class="clientname">{{ $testimonial->name }}</div>
                        {{-- <div class="clientinfo">CEO - Company Inc</div> --}}
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>

<!-- Blog Section -->

<!-- Clients Logo-->
<div class="our-clients">
    <div class="container">
        <div class="owl-clients">
            <div class="item"> <img src="images/client-logo4.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
            <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
        </div>
    </div>
</div>
<!-- Clients Logo end-->


@include('layout.footer')
