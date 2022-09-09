@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li  class="active"><a href=" {{route('admin.index')}} "> <i class="icon-home"></i>Home </a></li>
    <li><a href=" {{ route('admin.users.index')}} "> <i class="icon-user-1"></i> Users</a></li>
    <li  class=""><a href="{{ route('admin.roles.index')}}"> <i  class="icon icon-settings"  aria-hidden="true"></i> Roles </a></li>
    {{-- <li  class=""><a href="{{ route('admin.permissions.index')}}"> <i data-icon="k" class="icon" aria-hidden="true"></i> Permissions </a></li> --}}
    <li><a href="{{ route('admin.practice-areas.index')}}"> <i class="fa fa-balance-scale" aria-hidden="true"></i>Practice Area  </a></li>
    <li><a href="{{ route('admin.attorneys.index')}}"> <i class="fa fa-gavel"></i>Attorneys </a></li>
    <li><a href="{{ route('admin.categories.index')}}"> <i class="fa fa-bookmark" aria-hidden="true"></i> Categories </a></li>
    <li><a href="{{ route('admin.tags.index')}}"> <i class="fa fa-tags"></i> Tags </a></li>
    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> More Links </a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="{{ route('admin.testimonials.index')}}">Testimonials</a></li>
        <li><a href="{{ route('admin.galleries.index')}}">Gallery</a></li>
        <li><a href="{{ route('admin.faqs.index')}}">FAQs</a></li>
      </ul>
    </li>
    <li><a href=""> <i class="icon-logout"></i>Home Page </a></li>
</ul>
</nav>
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-user-1"></i></div><strong>Users</strong>
                            </div>
                            <div class="number dashtext-1"> {{ $users->count()}} </div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="fa fa-gavel"></i></div><strong> Practise Areas </strong>
                            </div>
                            <div class="number dashtext-2"> {{ $practice_areas->count()}} </div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-settings"></i></div><strong>
                                    Roles
                                </strong>
                            </div>
                            <div class="number dashtext-3"> {{$roles->count()}} </div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Attorneys</strong>
                            </div>
                            <div class="number dashtext-4"> {{$attorneys->count()}} </div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 100%" aria-valuenow="35" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @include('admin.layout.footer')
