@include('admin.layout.header')
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href=" {{route('admin.index')}} "> <i class="icon-home"></i>Home </a></li>
                <li><a href=" {{ route('admin.users.index')}} "> <i class="icon-user-1"></i> Users</a></li>
                <li  class="active"><a href="{{ route('admin.roles.index')}}"> <i class="icon icon-settings" aria-hidden="true"></i> Roles </a></li>
                {{-- <li  class=""><a href="{{ route('admin.permissions.index')}}"> <i class="fa fa-lock" aria-hidden="true"></i> Permissions </a></li> --}}
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
            <li class="breadcrumb-item active">Role            </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
          	<div class="row">
          		<div class="col-lg-12">
          			<div class="add-new-item-header">
          				<span><i class="fa fa-plus-circle"></i> Update {{$role->name}}</span>
          			</div>
          		</div>
          	</div>
            <div class="row">
            <div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Update Role</strong></div>
                  <div class="block-body">
                  @error('name')
                    <div class="alert alert-danger">
                      Name is Required
                    </div>
                    @enderror
                    <form class="form-inline" method="POST" action=" {{ route('admin.roles.update', $role) }} ">
                    @csrf  
                    @method('PUT')
                    <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Name</label>
                        <input name="name"  type="text" value=" {{ $role->name }} " class="mr-sm-3 form-control">
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-success">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" >
                <div class="block">
                  <div class="title"><strong>Role Permissions</strong></div>
                  <div class="row">
                    @if($role->permissions)
                      @foreach($role->permissions as $role_permission)
                      <form  action=" {{ route('admin.roles.permissions.revoke',[$role->id, $role_permission->id] ) }} " method="POST" onsubmit="return confirm('Are you sure ?');">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger m-1" title="Delete role permission">{{$role_permission->name}}</button>
                      </form>
                        
                      @endforeach
                    @endif
                  </div>
                  <div class="form-group row">
                    <form action="  {{ route('admin.roles.permissions', $role) }}  " method="post">
                      @csrf
                    <div class="col-sm-9">
                        <select name="permission" style="width:100%;" class="form-control mb-3 mb-3">
                          @foreach($permissions as $permission)
                          <option value=" {{$permission->name }} "> {{$permission->name}} </option>
                          @endforeach
                        </select> 
                        <div class="form-group">
                        <input type="submit" value="Assign" class="btn btn-success">
                      </div>
                      </div>
                    </form>
                      
                  </div>
                <div>
              </div>
              

            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>

@include('admin.layout.footer')