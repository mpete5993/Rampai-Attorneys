@include('layout.header')

<!-- NAVIGATION LINKS -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href=" {{ url('/') }} ">Home <span class=""></span></a>
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
                <div class="breadCrumb"><a href=" {{ url('/')}} ">Home</a> / <span>Attorney Details</span></div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title End -->

<div class="parallax-section">
    <div class="container">
        <div class="attorneytop">
            <div class="row">
                <div class="col-md-4 col-sm-4"><img src="{{ asset($attorney->image) }}" class="lawimg" alt="" />
                </div>
                <div class="col-md-8 col-sm-8">
                    <h2> {{ $attorney->user->name }} </h2>
                    <h3 class="attorney-pract-area" style="margin: 10px 0"><i class="fa fa-gavel"></i>
                        {{ implode(' , ',$attorney->practiceAreas()->get()->pluck('name')->toArray()) }}</h3>
                    <ul class="address">
                        <li><i class="fa fa-phone"></i><a href="tel:{{ $attorney->phone }}">{{ $attorney->phone }}</a>
                        </li>
                        <li><i class="fa fa-envelope-o"></i><a
                                href="mailto:{{ $attorney->user->email }} ">{{ $attorney->user->email }} </a></li>
                    </ul>
                    <ul class="list-inline social">
                        @if ($attorney->facebook != 0)
                            <li> <a href="{{ $attorney->facebook }}"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a> </li>
                        @endif
                        @if ($attorney->twitter != 0)
                            <li> <a href="http://{{ $attorney->twitter }}"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a> </li>
                        @endif
                        @if ($attorney->linkedIn != 0)
                            <li> <a href="http://{!! $attorney->linkedIn !!} "><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a> </li>
                        @endif
                    </ul>

                    <div class="attorneydetail">
                        @if ($attorney->details > 0)
                        <h1>About {{ $attorney->user->name }} </h1>
                        {!! $attorney->details !!}
                        @else
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@include('layout.footer')
