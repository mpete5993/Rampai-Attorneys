@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href=" {{ route('admin.index') }} "> <i class="icon-home"></i>Home </a></li>
    <li><a href=" {{ route('admin.users.index') }} "> <i class="icon-user-1"></i> Users</a></li>
    <li class=""><a href="{{ route('admin.roles.index') }}"> <i class="icon icon-settings" aria-hidden="true"></i> Roles </a>
    </li>
    {{-- <li class="active"><a href="{{ route('admin.permissions.index') }}"> <i class="fa fa-lock" aria-hidden="true"></i>
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
            <li class="breadcrumb-item active">Attorneys </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="add-new-item-header">
                        <span><i class="fa fa-list text-success"></i> <a
                                href=" {{ route('admin.attorneys.index') }} "> View All
                                Attorneys</a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">
                                <i class="fa fa-plus-square"></i> Add New Attorney </strong>
                        </div>
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <span> {{$error}} </span>
                        </div>
                        @endforeach
                        <div class="block-body">
                            <form method="POST" action=" {{ route('admin.attorneys.store') }} "
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <select name="user_id" class="form-control" required>
                                        <option value="">Select the User</option>
                                        @foreach ($users as $user)
                                         <option value="{{$user->id}}"> {{$user->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Practice Areas</label>
                                    @foreach ($practice_areas as $practice_area)
                                        <div class="i-checks">
                                            <input type="checkbox" value=" {{ $practice_area->id }} "
                                                class="checkbox-template" name="practice_area[]"
                                                >
                                            <label for="checkboxCustom1"> {{ $practice_area->name }} </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Social Media Links </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone Number(optional)</label>
                                            <input type="number" name="phone"
                                                placeholder="" class="form-control" autocomplete="" inputmode="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Facebook Link(optional)</label>
                                            <input type="text" name="facebook"
                                                placeholder="" class="form-control" autocomplete="" inputmode="url">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">LinkedIn Link(optional)</label>
                                            <input type="text" name="linkedin"
                                                placeholder="" class="form-control" autocomplete="" inputmode="url">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Twitter Link(optional)</label>
                                            <input type="text" name="twitter"
                                                placeholder="" class="form-control" autocomplete="" inputmode="url">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Image</label>
                                    <input type="file" name="image" placeholder="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Description</label>
                                    <textarea class="ckeditor form-control" name="details">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
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
<script src=" {{ asset('ckeditor/ckeditor.js') }} "></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
@include('admin.layout.footer')
