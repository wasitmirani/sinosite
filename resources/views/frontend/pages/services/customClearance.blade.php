
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
</style>
@endpush
<section class="page-title page-title-4 bg-overlay  bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/customclear.jpg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
       <div class="col-12 col-lg-6">
          <div class="title text-lg-left">
             <div class="title-sub-heading">
                <p>Dedicated customer teams &amp; an agile services</p>
             </div>
             <div class="title-heading">
                <h1>Custom Clearance  Service</h1>
             </div>
             @component('frontend.components.Breadcam',
             ['back_link'=>'Services','back_url'=>route('services.all'),'active_link'=>'Custom Clearance Service'])
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
                      <h5><strong>Custom Clearance Service</strong> </h5>
                      <p>To ensure timely commitment and safe delivery of all cargo, the in-house customs clearance department offers hands-on experience in handling every aspect of the clearance processes, be it communicating with officials or offering consultancy services.</p>


                   </div>



                   <div class="entry-why">
                      <div class="entry-bio">
                        <span style="font-size:18px; color:black"><strong>Our services include</strong> </span>
                      </div>
                      <div class="row">
                        @component('frontend.components.pointsList',['title'=>'Containerised'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Break bulk'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Bulk commodity'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Project cargo'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Re-Export'])
                              @endcomponent
                      </div>
                     </div>


                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

 @endsection
