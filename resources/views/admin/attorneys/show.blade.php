@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href=" {{ route('admin.index') }} "> <i class="icon-home"></i>Home </a></li>
    <li class=""><a href=" {{ route('admin.users.index') }} "> <i class="icon-user-1"></i> Users</a></li>
    <li class=""><a href="{{ route('admin.roles.index') }}"> <i class="icon icon-settings" aria-hidden="true"></i> Roles </a>
    </li>
    {{-- <li class=""><a href="{{ route('admin.permissions.index') }}"> <i class="fa fa-lock" aria-hidden="true"></i>
            Permissions </a></li> --}}
    <li><a href="{{ route('admin.practice-areas.index') }}"> <i class="fa fa-balance-scale"
                aria-hidden="true"></i>Practice Area </a></li>
    <li  class="active"><a href="{{ route('admin.attorneys.index') }}"> <i class="fa fa-gavel"></i>Attorneys </a></li>
    <li><a href="{{ route('admin.categories.index') }}"> <i class="fa fa-bookmark" aria-hidden="true"></i> Categories
        </a></li>
    <li><a href="{{ route('admin.tags.index') }}"> <i class="fa fa-tags"></i> Tags </a></li>
    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>
            More Links </a>
        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="{{ route('admin.testimonials.index') }}">Testimonials</a></li>
            <li><a href="{{ route('admin.galleries.index') }}">Gallery</a></li>
            <li><a href="{{ route('admin.faqs.index') }}">FAQs</a></li>
        </ul>
    </li>
    <li><a href=""> <i class="icon-logout"></i>Home Page </a></li>
</ul>
</nav>
<!-- Sidebar Navigation end-->

<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Attorney </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                    <div class="block" style="border-top: 2px solid #DB6574">
                        <div class="title"><strong class="d-block"> Our Expert Lawyer </strong></div>
                        <hr>
                        <div class="block-body">
                            <div class="row" class="attorney-details">
                                <div class="col-lg-3 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <img src="{{ asset($attorney->image) }}" width="100%" height="300px"
                                            style="object-fit: contain">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label> <i class="fa fa-user"></i> {{ $attorney->user->name }}</label><br>
                                    </div>
                                    <div class="">
                                        <label for="">Practice Areas:</label><br>
                                        <span>
                                            {{ implode(' , ',$attorney->practiceAreas()->get()->pluck('name')->toArray()) }}
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label> <i class="fa fa-envelope"></i> example@gmail.com</label><br>
                                    </div>
                                    <div class="">
                                        <Span>
                                            <i class="fa fa-phone"></i> {{ $attorney->phone }}
                                        </Span>
                                    </div>
                                    <div class="">
                                        <label for="">Social Media</label>
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <h5>Attorney Details</h5>
                                        <p>
                                            {!! $attorney->details !!}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
                <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank"
                        href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
        </div>
    </footer>
</div>
<script src=" {{ asset('ckeditor/ckeditor.js') }} "></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
@include('admin.layout.footer')
