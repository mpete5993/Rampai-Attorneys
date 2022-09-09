<!DOCTYPE html>
<html lang="en">

<!-- index59:08-->

<head>
    <meta charset="UTF-8">
    <title>Rampai Attorneys</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Lawyer & Attorney One Page HTML Template">
    <meta name="keywords" content="one page, html, template, responsive, business">
    <meta name="author" content="sharjeel anjum">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Rev Slider css -->
    <link rel="stylesheet" href="{{ asset('js/revolution-slider/css/settings.css') }}">

    <!-- Magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Owl Carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/toastr.css') }} ">
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <div class="preloader">
        <div class="cssload-dots">
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="navbar custom-navbar" role="navigation">
        <div class="container">

            <!-- NAVBAR HEADER -->
            <div class="login-header">

                @if (Route::has('login'))
                    <ul>
                        @auth
                            {{-- <img src="{{ URL::to('/Images') }}/{{ Auth::user()->avatar }} " class="avatar" alt=""
                        style=""> --}}
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn">
                                    {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href=" {{ url('profile') }} "><i class="fa fa-user"></i> My Profile</a>
                                    @hasrole('admin')
                                        <a href=" {{ route('admin.index') }} "><i class="fa fa-dashboard"></i> Dashboard</a>
                                    @endhasrole
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @else
                            <li><a href="{{ route('register') }}">Register</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        @endauth
                    </ul>
                @endif

            </div>
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span
                        class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span
                        class="icon icon-bar"></span> </button>
                <!-- lOGO TEXT HERE -->
                <a href="{{url('/')}}" class="navbar-brand"><img src="images/logo-color.png" alt="" /></a>
            </div>


