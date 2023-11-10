@extends('layouts.frontend.master')
@section('content')
@push('styles')
<style type="text/css">
   #wrapperParallax {
   position: relative;
   z-index: 1060;
   min-height: 50vh;
   }
   .case-study.case-study-2 {
   padding-top: 40px !important;
   padding-bottom: 30px !important;
   }
   .case-study.case-study-2 {
   padding-top: 40px !important;
   padding-bottom: 30px !important;
   }
   .bg-section {
   position: relative;
   overflow: hidden;
   z-index: 1;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center bottom;
   width: 100%;
   height: 100%;
   }
   .carousel-item {
  height: 80vh;
  background-repeat: no-repeat;
  background-position: center center contain;

  background-size: cover;
}
.owl-carousel {
  position: relative;
}

.owl-item {
  width: 100% !important;
  display: none;
  transition: opacity 0.5s;
}

.owl-item.active {
  display: block;
}

.owl-item.active img {
  width: 100%  !important;
}
</style>
@endpush
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title" style="padding-top: 42px;">
   <div class="bg-section"><img src="{{asset('assets/images/page-titles/shipag.png')}}" alt="Background"></div>
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-6">
            <div class="title text-lg-left">
               <div class="title-sub-heading">
                  <p>Dedicated customer teams &amp; an agile services</p>
               </div>
               <div class="title-heading">
                  <h1>Ship Agency Service</h1>
               </div>
               @component('frontend.components.Breadcam',
               ['back_link'=>'Services','back_url'=>route('services.all'),'active_link'=>'Ship Agency Service'])
               @endcomponent
            </div>
         </div>
      </div>
   </div>
</section>
<section class="service-single case-study case-study-2 pb-70" id="service-single">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
            <div class="sidebar sidebar-case-study" style="margin-top:50px;">
               <div class="widget widget-categories">
                  <div class="widget-title">
                     <h5><strong>Services</strong> </h5>
                  </div>
                  <div class="widget-content">
                     <ul class="list-unstyled">
                        @component('frontend.components.servicesList')
                        @endcomponent
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="case-study-entry">
               <div class="entry-content">
                  <div class="entry-bio">
                     <h5><strong>Ship Agency Service</strong> </h5>
                  
                     <p>Our shipping agency services ensure the safety and best interest of the vessel and its principals. Our experienced and qualified team members provide round-the-clock services to ensure that no quality standards are disregarded. We have strong relationships with Port & Customs Authorities all over Pakistan, we are also a part of the Pakistan Shipping Agents Association (PSAA). We have our own Port Captain to supervise the discharging/loading of cargo and make sure of timely berthing/sailing of the vessels. We as agents take care of our owner’s interest to ensure quick turn-around, Master requirements, and if any repair is required.</p>
                
                  </div>
                   <div class="entry-why mt-2">
                      <div class="entry-bio">
                         <span style="font-size:18px; color:black"><strong>Our services include</strong> </span>
                      </div>
                     <br>
                      <div class="row mt-2">
                        @component('frontend.components.pointsList',['title'=>'Agency services'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Stevedoring'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Owner Protecting Agency'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Owner Husbandry'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Cash to Master'])
                              @endcomponent
                                @component('frontend.components.pointsList',['title'=>'Crew Change at O/A & within Ports premises'])
                              @endcomponent
                               @component('frontend.components.pointsList',['title'=>'Provisions & Deck Stores'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Ship Spares'])
                              @endcomponent
                               @component('frontend.components.pointsList',['title'=>'Workshop for repairs'])
                              @endcomponent
                               @component('frontend.components.pointsList',['title'=>'Surveyor’s services'])
                              @endcomponent
                               @component('frontend.components.pointsList',['title'=>'P&I Club representation'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Arbitration'])
                              @endcomponent
                      </div>
                     </div>
                  <!--<div class="entry-why mt-2">-->
                  <!--   <div class="entry-bio">-->
                  <!--      <span style="font-size:18px; color:black"><strong>Our Motto</strong> </span>-->
                  <!--   </div>-->
                  <!--   <div class="row mt-2">-->
                  <!--      <div class="col-md-6  ">-->
                  <!--         <p style="    margin-bottom: 2px !important;">T <span class="ml-2 text-danger">Together</span></p>-->
                  <!--         <p style="    margin-bottom: 2px !important;">E <span class=" ml-2 text-danger">Everyone</span></p>-->
                  <!--         <p style="    margin-bottom: 2px !important;">A <span class=" ml-2 text-danger">Achieves</span></p>-->
                  <!--         <p style="    margin-bottom: 2px !important;">M <span class="ml-2 text-danger">More</span></p>-->
                  <!--      </div>-->
                  <!--   </div>-->
                     
                   

                  <!-- </div>-->
                   
                   <!-- Slider -->
<section class="slider-section" style="    background-color: #fff;
    padding: 1px 0 !important;
    overflow: hidden;">
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			
				<li data-target="#carousel" data-slide-to="3"></li>
			<li data-target="#carousel" data-slide-to="4"></li>
		</ol> <!-- End of Indicators -->

		<!-- Carousel Content -->
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="background-image: url('{{asset("assets/images/services/new1.jpg")}}');">
				<div class="carousel-caption d-none d-md-block">
				
				</div>
			</div> <!-- End of Carousel Item -->

			<div class="carousel-item" style="background-image:  url('{{asset("assets/images/services/new2.jpg")}}');">
				<div class="carousel-caption d-none d-md-block">
					<!--<h3>Bridge Picture</h3>-->
					<!--<p>Awesome description for bridge.</p>-->
				</div>
			</div> <!-- End of Carousel Item -->

			
				<div class="carousel-item" style="background-image:  url('{{asset("assets/images/services/new4.jpg")}}');">
			
			</div>
				<div class="carousel-item" style="background-image:  url('{{asset("assets/images/services/new5.jpg")}}');">
			
			</div><!-- End of Carousel Item -->
		</div> <!-- End of Carousel Content -->

		<!-- Previous & Next -->
		<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
		<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
	</div> <!-- End of Carousel -->
</section> <!-- End of Slider -->


                </div>
            </div>
         </div>
        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-4">
  <div class="case-study-entry mt-2">
    <div class="entry-content">
      <div class="entry-bio">
        <h5><strong>Stevedoring</strong></h5>
        <p class="mt-2">Sinotrans Logistics Pakistan has its own in-house stevedoring services along with all types of equipment to handle a variety of cargo. Our port operators and teams are qualified and highly skilled professionals who have served the industry for many years. We are meticulous in the handling of cargo with the promise of complete safety while maintaining the highest possible quality standards.
Understanding the needs of our clients we also provide the services of project cargo handling. Unlike other stevedores, we have the relevant experience and machinery to unload oversized and heavy-lift cargoes.</p>
    
      </div>
    </div>
    
    <section class="slider-section" style="    background-color: #fff;
    padding: 1px 0 !important;
    overflow: hidden;">
	<div id="carousel1" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel1" data-slide-to="1"></li>
			<li data-target="#carousel1" data-slide-to="2"></li>
			
		</ol> <!-- End of Indicators -->

		<!-- Carousel Content -->
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="background-image: url('{{asset("assets/images/services/st1.jpg")}}');">
				<div class="carousel-caption d-none d-md-block">
				
				</div>
			</div> <!-- End of Carousel Item -->

			<div class="carousel-item" style="background-image:  url('{{asset("assets/images/services/st2.jpg")}}');">
				<div class="carousel-caption d-none d-md-block">
					<!--<h3>Bridge Picture</h3>-->
					<!--<p>Awesome description for bridge.</p>-->
				</div>
			</div> <!-- End of Carousel Item -->

			<div class="carousel-item" style="background-image:  url('{{asset("assets/images/services/st3.jpg")}}');">
			
			</div>
			<!-- End of Carousel Item -->
		</div> <!-- End of Carousel Content -->

		<!-- Previous & Next -->
		<a href="#carousel1" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
		<a href="#carousel1" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
	</div> <!-- End of Carousel -->
</section>
  </div>
</div>

      </div>
   </div>
   </div>
</section>
@endsection