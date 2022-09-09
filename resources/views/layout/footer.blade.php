<!-- Footer Section -->
<div class="site-footer"> 
  <!-- Footer Top start -->
  <div class="footer-top-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-logo"><img src=" {{asset('images/logo.png')}} " alt="Lawyer & Attorney"></h3>
            <ul class="footer-contact">
              <li><i class="fa fa-phone"><a href="tel:051 430 1065"></i> 051 430 1065</li></a>
              <li><i class="fa fa-mobile"><a href="tel:079 183 0345"></i> 079 183 0345</li></a>
              <li><i class="fa fa-envelope"><a href="mailto:info@rampaiattorneys.co.za"></i>info@rampaiattorneys.co.za</li></a>
              <li><i class="fa fa-fax"></i> 051 430 1065</li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">Quick Links</h3>
            <ul>
              <li><a href=" {{url('/')}} ">Home</a></li>
              <li><a href=" {{url('about')}} ">About Company</a></li>
              <li><a href=" {{url('services')}} ">Our Services</a></li>
              <li><a href="{{ url('contact') }}">Contact Us</a></li>
              {{-- <li><a href=" ">Gallery</a></li> --}}
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">About Lawyer</h3>
            <ul>
              <li><a href="{{ url('practice-areas')}}">Practice Areas List</a></li>
              <li><a href=" {{ url('attorneys')}} ">Attorney List</a></li>
              <li><a href="{{ url('testimonials')}}">Testimonials</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-lwf-title">Opening Hours</h3>
            <ul class="open-hours">
              <li><span>Mon to Fri:</span> <span class="text-right">09:30AM to 05:30PM</span></li>
              <li><span>Sun:</span> <span class="text-right">Closed</span></li>
            </ul>
            <div class="newsletter">
              <form>
                <input type="text" placeholder="Enter your email" value="" class="news-input">
                <button type="submit" value="" class="news-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top end --> 
  
  <!-- copyright start -->
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-6"><span>Rampai Attorneys</span>.</div>
        <div class="col-md-12 col-md-6 text-right"><a target="_blank" href="https://www.templateshub.net"></a></div>
      </div>
    </div>
  </div>
  <!-- copyright end --> 
</div>

<!-- Bootstrap --> 
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 

<!-- Popup --> 
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> 
<script src="{{ asset('js/magnific-popup-options.js') }}"></script> 

<!-- Carousel --> 
<script src="{{ asset('js/owl.carousel.js') }}"></script> 

<!-- Sticky Header --> 
<script src="{{ asset('js/jquery.sticky.js') }}"></script> 

<!-- Revolution Slider --> 
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script> 

<!-- Parallax --> 
<script src="{{ asset('js/jquery.parallax.js') }}"></script> 

<!-- Counter --> 
<script src="{{ asset('js/counter.js') }}"></script> 
<script src="{{ asset('js/smoothscroll.js') }}"></script> 

<!-- Custom --> 
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>

<!-- index59:08-->
<script>
  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
</script>
</html>