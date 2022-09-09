@include('layout.header')
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href=" {{ url('/') }} ">Home <span class=""></span></a>
        </li>
        <li><a href=" {{ url('about') }} ">About</a></li>
        <li class=""><a href=" {{ route('services.index') }} ">Service</a></li>
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
                <i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890
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
                <h1 class="page-heading">Testimonials</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="#.">Home</a> / <span>Testimonials</span></div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- section -->
<div class="innerpgWraper">
    <div class="container">
        <ul class="testimonials row">
            @if ($testimonials->count() < 0)
                <li class="col-md-6">
                    <p class="text-danger">No Testimonials yet </p>
                </li>
            @else
                @foreach ($testimonials as $testimonial)
                    <li class="col-md-12">
                        <div class="int">
                            <p>
                                {!! $testimonial->content !!}
                            </p>
                        </div>
                        <div class="clientinfo"> <strong> {{ $testimonial->name }} (Client)</strong> </div>
                    </li>
                @endforeach
            @endif
        </ul>
        <div class="row">
            <div class="col-lg-6">
                <!-- LEAVE COMMENTS -->
                <div class="contact-form">
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h5>Give us your Feedback <i class="fa fa-comment-o"></i> </h5>
                    <form id="contact-form" class="row" action="{{ route('testimonial.store') }} " method="POST">
                        @csrf
                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" rows="5" name="content" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button id="submit" type="submit" class="form-control">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layout.footer')
