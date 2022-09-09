@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href=" {{ route('admin.index') }} "> <i class="icon-home"></i>Home </a></li>
    <li><a href=" {{ route('admin.users.index') }} "> <i class="icon-user-1"></i> Users</a></li>
    <li class="active"><a href="{{ route('admin.roles.index') }}"> <i class="icon icon-settings" aria-hidden="true"></i>
            Roles </a></li>
    {{-- <li  class=""><a href="{{ route('admin.permissions.index')}}"> <i class="fa fa-lock" aria-hidden="true"></i> Permissions </a></li> --}}
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
            <li class="breadcrumb-item active">Galleries </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn-modal">
                            <i class="fa fa-folder"></i> Add new Album </button><hr>
                        <div class="title"><strong>Upload new photos</strong></div>
                        <div class="block-body">
                            <form method="POST" action=" {{ route('admin.galleries.store') }} "
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Select Album</label>
                                    <select name="category_id" class="form-control mb-3 mb-3">
                                        <option value="">Select Album</option>
                                        @foreach ($categories as $category)
                                            <option value=" {{ $category->id }} "> {{ $category->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Image</label>
                                    <input type="file" name="image[]" placeholder="" class="form-control" multiple>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Galleries</strong></div>
                        <div class="block-body">
                            <div class="row">
                                @foreach ($galleries as $album)
                                    <div class="col-lg-2">
                                        <div class="folder-list">
                                            <div class="">
                                                <a href=" {{ route('admin.galleries.show', $album->id) }} ">
                                                    <i class="fa fa-folder"></i>
                                                </a>
                                            </div>
                                            <div class="">
                                                <span> {{$album->category->name}} (8) </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
<!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left"
    style="display: none;" aria-hidden="true">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Add a new album.</strong>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.categories.store') }} ">
                    @csrf
                    <div class="form-group">
                        <label>Album Name</label>
                        <input name="name" placeholder="Album Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>

@include('admin.layout.footer')
