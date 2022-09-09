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
            <li class="breadcrumb-item active">Attorney </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                    <div class="block" style="border-top: 2px solid #DB6574">
                        <div class="title" ><strong class="d-block">Edit {{$attorney->user->name}}</strong></div><hr>
                        <div class="block-body">
                            <form method="POST" action=" {{ route('admin.attorneys.update', ['attorney' => $attorney->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label>Photo</label><br>
                                            <img src="{{asset($attorney->image)}}" width="100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Practice Areas</label>
                                    @foreach ($practice_areas as $practice_area)
                                        <div class="i-checks">
                                            <input type="checkbox" value=" {{ $practice_area->id }} "
                                                class="checkbox-template" name="practice_areas[]"
                                               value="{{$practice_area->id}}" {{ $attorney->AttorneyPracticeAreas($practice_area->name) ? 'checked':'' }}>
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
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone Number(optional)</label>
                                            <input type="text" value=" {{ $attorney->phone }} " name="phone"
                                                placeholder="" class="form-control" autocomplete="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Facebook Link(optional)</label>
                                            <input type="text" value=" {{ $attorney->facebook }} " name="facebook"
                                                placeholder="" class="form-control" autocomplete="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">LinkedIn Link(optional)</label>
                                            <input type="text" value="{{ $attorney->linkedIn }}" name="linkedin"
                                                placeholder="" class="form-control" autocomplete="">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label">Image</label>
                                    <input type="file"name="image"
                                        placeholder="" class="form-control" autocomplete="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label"> Attorney Details(optional)</label>
                                    <textarea class="ckeditor form-control" name="details">
                                        {{ $attorney->details }}
                                    </textarea>
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
<script src=" {{ asset('ckeditor/ckeditor.js') }} "></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
@include('admin.layout.footer')
