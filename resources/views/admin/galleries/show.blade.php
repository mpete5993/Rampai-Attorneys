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
                <div class="block">
                        <div class="title"><strong>Upload more photos</strong></div>
                        <div class="block-body">
                            <form method="POST" action="{{ route('admin.galleries.update', $album->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                {{-- <div class="form-group">
                                    <label class="form-control-label">Select Album</label>
                                    <select name="category_id" class="form-control mb-3 mb-3">
                                        <option value="">Select Album</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-control-label">Image</label>
                                    <input type="file" name="image[]" placeholder="" class="form-control" multiple required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Galleries of {{$album->category->name}} </strong></div>
                        <div class="block-body">
                        @php
                            $id = $album->id;
                            $image = DB::table('galleries')->where('id', $id)->first();
                            $images = explode('|', $image->image);
                        @endphp

                            <div class="row">
                                @foreach ($images as $image)
                                <div class="col-lg-4 p-1">
                                <img src="{{asset($image)}}" alt="image" width="100%" height="100%">
                                </div>   
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('admin.layout.footer')
