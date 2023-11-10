
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{config('app.name')}}">
	<meta property="og:title" content="{{config('app.name')}}">
	<meta property="og:description" content="{{config('app.name')}}">
	<meta property="og:image" content="{{config('app.name')}}">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>{{config('app.name')}}</title>
    @stack('styles')
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="{{asset('vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"">
	<link href="{{asset('vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

	<!-- Style css -->
	<link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<body>

	<!--*******************
		Preloader start
	********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
		Preloader end
	********************-->

	<!--**********************************
		Main wrapper start
	***********************************-->
	<div id="main-wrapper">

		<!--**********************************
			Nav header start
		***********************************-->
		<div class="nav-header">
			<a href="{{route('home')}}" class="brand-logo">
                <img src="{{asset('assets/images/logo/logo-dark.png')}}" alt="" srcset="" style="width: 144px;">
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
			Nav header end
		***********************************-->



		<!--**********************************
			Header start
		***********************************-->
		@include('layouts.backend.components.header')
		<!--**********************************
			Header end ti-comment-alt
		***********************************-->

		<!--**********************************
			Sidebar start
		***********************************-->
        @include('layouts.backend.components.sidebar')
		<!--**********************************
			Sidebar end
		***********************************-->

		<!--**********************************
			Content body start
		***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
                    @yield('content')
			</div>
		</div>
		<!--**********************************
			Content body end
		***********************************-->



		<!--**********************************
			Footer start
		***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">{{config('app.name')}}</a> {{date('Y')}}</p>
			</div>
		</div>
		<!--**********************************
			Footer end
		***********************************-->

		<!--**********************************
		   Support ticket button start
		***********************************-->

		<!--**********************************
		   Support ticket button end
		***********************************-->


	</div>
	<!--**********************************
		Main wrapper end
	***********************************-->

	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="{{asset('vendor/global/global.min.js')}}"></script>

	<script src="{{asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

	<!-- Apex Chart -->

	<script src="{{asset('vendor/apexchart/apexchart.js')}}"></script>


	<!-- Chart piety plugin files -->


	<!-- Dashboard 1 -->
	<script src="{{asset('js/dashboard/dashboard-1.js')}}"></script>
    @stack('scripts')
	<script src="{{asset('vendor/owl-carousel/owl.carousel.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

	<script src="{{asset('js/custom.min.js')}}"></script>
	<script src="{{asset('js/dlabnav-init.js')}}"></script>
	<script src="{{asset('js/demo.js')}}"></script>
	<script src="{{asset('js/styleSwitcher.js')}}"></script>
	<script>
		function TravlCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.front-view-slider').owlCarousel({
					loop:false,
					margin:15,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
					responsive:{
						0:{
							items:1
						},

						768:{
							items:2
						},

						1400:{
							items:2
						},
						1600:{
							items:3
						},
						1750:{
							items:3
						}
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					TravlCarousel();
				}, 1000);
			});
	</script>
	<script>
		$(function () {
			$('#datetimepicker').datetimepicker({
				inline: true,
			});
		});

		$(document).ready(function(){
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
	</script>

</body>
</html>
