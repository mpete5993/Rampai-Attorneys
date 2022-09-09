@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href=" {{route('admin.index')}} "> <i class="icon-home"></i>Home </a></li>
    <li  class="active"><a href=" {{ route('admin.users.index')}} "> <i class="icon-user-1"></i> Users</a></li>
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
            <li class="breadcrumb-item active">Users </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="add-new-item-header">
                        <span><i class="fa fa-plus-circle text-success"></i> <a href="">Add New User</a> </span>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong> <i class="fa fa-users"></i> Users:</strong></div><hr>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" style="margin: 20px 0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row"> {{ $user->id }} </th>
                                            <td> {{ $user->name }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td>  
                                            @if ($user->roles()->count() > 0)
                                            {{ implode(' , ' , $user->roles()->get()->pluck('name')->toArray()) }}
                                                @else
                                                subscriber
                                            @endif
                                            </td>
                                            <td class="avatar-icon">
                                                <i class="fa fa-user"></i>
                                            </td>
                                            <td class="action">
                                                <a href=" {{ route('admin.users.edit', $user->id) }} ">
                                                    <i class="fa fa-edit text-success" title="Edit user"></i>
                                                </a>
                                                <form action=" {{ route('admin.users.destroy', $user->id) }} "
                                                    method="POST" onsubmit="return confirm('Are you sure ?');">
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
                            {{ $users->links() }}
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
