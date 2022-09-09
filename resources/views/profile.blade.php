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
                <div class="breadCrumb"><a href=" {{ url('/') }} ">Home</a> / <span>Profile</span></div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title End -->
<div class="container">
    <div class="profile-container">
        <div class="row" style="margin-bottom: 20px">
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="profile-icon">
                    <i class="fa fa-user-o"></i>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-md-4">
                <div class="" style="margin:10px 0">
                    <span><strong>Name</strong></span>
                    <span> {{ $user->name }} </span>
                </div>
                <div class="">
                    <span><strong>Email:</strong></span>
                    <span> {{ $user->email }} </span>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <i class="fa fa-edit"></i> Edit Profile
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form">
                            <form id="contact-form" class="row" action="{{ route('profile.edit') }} "
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="col-md-12 col-sm-6">
                                    <input type="text" class="form-control" value="{{ $user->name }}"
                                        name="name" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <input type="email" class="form-control" value="{{ $user->email }}"
                                        name="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <span class="text-info">Leave blank to keep your password</span>
                                    <input type="tel" class="form-control" value="" name="password"
                                        placeholder="password" autocomplete="off">
                                </div>
                                <div class="col-md-2">
                                    <button id="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@include('layout.footer')
