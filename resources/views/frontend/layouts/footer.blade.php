<footer class="footer">
	<div class="footer-first-row">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<ul class="call-email-alt">
						<li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>01787817803</a></li>
						<li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i><span
									class="__cf_email__"
									data-cfemail="1a73747c755a7d7b777875696f6a7f68777b68717f6e34797577">[email&#160;protected]</span></a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
	<div class="footer-second-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="second-row-item">
						<h4>Categories</h4>
						<ul>
							<li><a href="#">Burger</a></li>
							<li><a href="#">Pizza</a></li>
							<li><a href="#">Fried Rice</a></li>
							<li><a href="#">Beverages</a></li>
							<li><a href="#">Snacks</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="second-row-item">
						<h4>Useful Links</h4>
						<ul>
							<li><a href={{route('home')}}>Home</a></li>
							<li><a href={{route('product-grids')}}>Products</a></li>
							<li><a href={{route('about-us')}}>About US</a></li>
							<li><a href={{route('contact')}}>Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="second-row-item">
						<h4>Top Cities</h4>
						<ul>
							<li><a href="#">Dhaka</a></li>
							<li><a href="#">Chittagong</a></li>
							<li><a href="#">Shylet</a></li>
							<li><a href="#">Khulna</a></li>
							<li><a href="#">Barisal</a></li>
							<li><a href="#">Rajsahi</a></li>
							<li><a href="#">Comilla</a></li>
							<li><a href="#">Tangail</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
				</div>
			</div>
		</div>
	</div>
	
</footer>
 
	<!-- Jquery -->
    {{-- <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('frontend/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	<!-- Isotope -->
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>

	
	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script> --}}


<script data-cfasync="false" src="{{asset('assets/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/OwlCarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/vendor/semantic/semantic.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/offset_overlay.js')}}"></script>
<script src="{{asset('assets/js/night-mode.js')}}"></script>