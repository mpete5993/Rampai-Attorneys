@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href=" {{ route('admin.index') }} "> <i class="icon-home"></i>Home </a></li>
    <li class="active"><a href=" {{ route('admin.users.index') }} "> <i class="icon-user-1"></i> Users</a></li>
    <li class=""><a href="{{ route('admin.roles.index') }}"> <i class="icon icon-settings" aria-hidden="true"></i> Roles </a>
    </li>
    {{-- <li class=""><a href="{{ route('admin.permissions.index') }}"> <i class="fa fa-lock" aria-hidden="true"></i>
            Permissions </a></li> --}}
    <li><a href="{{ route('admin.practice-areas.index') }}"> <i class="fa fa-balance-scale"
                aria-hidden="true"></i>Practice Area </a></li>
    <li><a href="{{ route('admin.attorneys.index') }}"> <i class="fa fa-gavel"></i>Attorneys </a></li>
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
            <li class="breadcrumb-item active">User </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                    <div class="block" style="border-top: 2px solid #DB6574">
                        <div class="title" ><strong class="d-block">Edit User</strong></div><hr>
                        <div class="block-body">
                            <form method="POST" action=" {{ route('admin.users.update', ['user' => $user->id]) }}">
                                @csrf
                                @method('PUT')
                                {{-- <div class="form-group">
                                    <label>Avatar</label><br>
                                    <img src=" {{asset('img/avatar-6.jpg')}} ">
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="text" value=" {{ $user->name }} " name="name"
                                        placeholder="Name" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" value=" {{ $user->email }} "name="email"
                                        placeholder="Email Address" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Roles</label>
                                    @foreach ($roles as $role)
                                        <div class="i-checks">
                                            <input type="checkbox" value=" {{ $role->id }} "
                                                class="checkbox-template" name="roles[]"
                                                {{ $user->hasAnyRole($role->name) ? 'checked' : '' }}>
                                            <label for="checkboxCustom1"> {{ $role->name }} </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-success">
                                </div>
                            </form>
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
