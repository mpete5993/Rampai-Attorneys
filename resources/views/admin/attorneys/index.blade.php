@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href=" {{ route('admin.index') }} "> <i class="icon-home"></i>Home </a></li>
    <li><a href=" {{ route('admin.users.index') }} "> <i class="icon-user-1"></i> Users</a></li>
    <li class=""><a href="{{ route('admin.roles.index') }}"> <i class="icon icon-settings" aria-hidden="true"></i> Roles </a>
    </li>
    {{-- <li><a href="{{ route('admin.permissions.index') }}"> <i class="fa fa-lock" aria-hidden="true"></i> Permissions </a>
    </li> --}}
    <li><a href="{{ route('admin.practice-areas.index') }}"> <i class="fa fa-balance-scale"
                aria-hidden="true"></i>Practice Area </a></li>
    <li class="active"><a href="{{ route('admin.attorneys.index') }}"> <i class="fa fa-gavel"></i>Attorneys </a></li>
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
            <li class="breadcrumb-item active">Lawyers </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="add-new-item-header">
                        <span><i class="fa fa-plus-circle text-success"></i> <a
                                href=" {{ route('admin.attorneys.create') }} "> Add new Lawyer</a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong><i class="fa fa-gavel" aria-hidden="true"></i> Our Team </strong></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover"  style="margin: 20px 0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Phone</th>
                                        <th>Social Media</th>
                                        <th>photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attorneys as $attorney)
                                        <tr>
                                            <th scope="row"> {{$attorney->id}} </th>
                                            <td> {{ $attorney->user->name }} </td>
                                            <td> {{$attorney->phone}} </td>
                                            <td> {{$attorney->facebook}}, {{$attorney->linkedIn}} </td>
                                            {{-- <td>
                                                {!! Str::limit($attorney->details, 50) !!}
                                            </td> --}}

                                            <td>
                                                <img src=" {{asset($attorney->image)}} " alt="" width="50px"
                                                    height="50px"
                                                    style="object-fit: contain">
                                            </td>
                                            <td class="action">
                                                <a href="  {{ route('admin.attorneys.show', $attorney->id) }}  " style="margin: 0 10px;">
                                                    <i class="fa fa-eye text-warning"title="View user"></i>
                                                </a>
                                                <a href="  {{ route('admin.attorneys.edit', $attorney->id) }}  ">
                                                    <i class="fa fa-edit text-success"title="Edit user"></i>
                                                </a>
                                                <form action="{{ route('admin.attorneys.destroy', $attorney->id) }}" method="post" 
                                                    onsubmit="return confirm('Are you sure ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-destroy" title="Delete user"><i
                                                            class="fa fa-trash-o text-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

@include('admin.layout.footer')
