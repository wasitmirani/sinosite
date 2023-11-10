
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
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title" style="padding-top: 42px;">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/serivice.png')}}" alt="Background"></div>
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
                      <p>Working with established vessel principals and service providers means benefitting from flexible, fully integrated Multimodal logistics solutions that allow for quick transit times.</p>
                      <p>The experience and dedication of the team provides outstanding handling of all types of cargoes, including heavy lifts and oversized project cargo, along with communication, knowledge and compliance requirements at all Pakistan ports. Success has always come from the ability to anticipate and adapt, allowing the company to keep up the pace with customers’ needs and demands.</p>

                   </div>



                   <div class="entry-why">
                      <div class="entry-bio">
                         <span style="font-size:18px; color:black"><strong>Our services include</strong> </span>
                      </div>
                      <div class="row">
                        @component('frontend.components.pointsList',['title'=>'Agency services'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Stevedoring'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Owner’s husbandry'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Provisions'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Ship spares'])
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
