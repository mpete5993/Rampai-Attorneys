@include('layout.header')

            <!-- NAVIGATION LINKS -->
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a href=" {{url('/')}} ">Home <span class=""></span></a>
                  </li>
                  <li><a href=" {{ url('about') }} ">About</a></li>
                  <li><a href=" {{ route('services.index') }} ">Service</a></li>
                  <li><a href=" {{ route('attorneys.index') }} ">Our Team</a></li>
                  <li class="dropdown"><a href="#">More <span class="caret"></span></a>
                      <!-- dropdown start -->
                      <ul class="dropdown-menu">
                          <li><a href="{{ route('practice_areas.index') }}">Practice Areas List</a></li>
                          <li><a href="{{ url('attorneys') }}">Attorney List</a></li>
                          <li><a href="{{ url('admin.galleries.index') }}">Gallery 1</a></li>
                          <li><a href="{{ url('testimonials') }}">Testimonials</a></li>
                      </ul>
                  </li>
                  <li class="active"><a href=" {{ route('contact') }} ">Contact</a></li>
                  <li>
                      <span class="calltxt">
                          <i class="fa fa-phone" aria-hidden="true"></i> 051 430 1065
                      </span>
                  </li>
              </ul>
          </div>
      </div>
  </div>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Contact Us</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Contact Us</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- Google Map Section -->
<div id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.596505858715!2d26.22239741453413!3d-29.117591382228934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e8fc5672a681aed%3A0x9b1c40d98ed6bd3a!2s40%20Fichardt%20St%2C%20Bloemfontein%20Central%2C%20Bloemfontein%2C%209301!5e0!3m2!1sen!2sza!4v1601360937606!5m2!1sen!2sza" 
					width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!-- Contact Section -->
<div id="contact" class="parallax-section">
  <div class="container"> 
    
    <!-- SECTION TITLE -->
    <div class="section-title">
      <h3>Get In Touch</h3>
      <p>
        We will reply to your messages within 24hrs
      </p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="contact-now">
          <div class="contact"> <span><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Address:</strong>
              <p>8500 lorem, New Ispum, Dolor amet sit 12301</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email Address:</strong>
              <p><a href="mailto:info@rampaiattorneys.co.za">info@rampaiattorneys.co.za</a></p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Phone No:</strong>
              <p><a href="tel:051 430 1065">051 430 1065</a></p>
              <p><a href="tel:079 183 0345">079 183 0345</a></p>
            </div>
          </div>
          <div class="contact"> <span><i class="fa fa-fax"></i></span>
            <div class="information"> <strong>Fax No:</strong>
              <p><a href="">051 430 1065</a></p>
            </div>
          </div>
          <!-- Contact Info --> 
        </div>
      </div>
      <div class="col-md-8"> 
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
        @endforeach
        <!-- CONTACT FORM HERE -->
        <div class="contact-form">
          <form id="contact-form" class="row" action="{{route('sendEmail')}} " method="POST">
            @csrf
            <div class="col-md-4 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="col-md-4 col-sm-12">
              <input type="tel" class="form-control" name="phone" placeholder="Phone" >
            </div>
            <div class="col-md-12 col-sm-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" >
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control ckeditor" rows="5" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" >Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <script src=" {{ asset('js/CKeditor/ckeditor.js') }} "></script> --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
@include('layout.footer')