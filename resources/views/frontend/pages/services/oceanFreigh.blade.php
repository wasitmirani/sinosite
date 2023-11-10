
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


</style>
@endpush

<section class="page-title page-title-4 bg-overlay  bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/ocean-freight-service.jpeg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
       <div class="col-12 col-lg-6">
          <div class="title text-lg-left">
             <div class="title-sub-heading">
                <p >Dedicated customer teams &amp; an agile services</p>
             </div>
             <div class="title-heading">
                <h1>Ocean Freight Service</h1>
             </div>
             @component('frontend.components.Breadcam',
             ['back_link'=>'Services','back_url'=>route('services.all'),'active_link'=>'Ocean Freight Service'])
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
                          <h5><strong>services</strong> </h5>
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
                          <h5><strong>Ocean Freight</strong></h5>
                          <p>Sinotrans works with leading carriers and uses an expanding network of agents, partners, as well as its own offices around the world, enabling the company to provide global services,  led by the extensive expertise of the local teams.</p>
                          <p>Working with Sinotrans means benefitting from the flexible, fully integrated Multi-Modal logistic solutions, competitive rates, and quick transit times. The all-inclusive ocean freight service utilizes the most efficient routes to ensure all cargo reaches its destination, timely and safely.</p>
                          <p>Apart from freight and handling, the company also offers full cargo routing proposals, including advice on cargo stowage, securing out of gauge, heavy and otherwise ‘exceptional’ cargoes. Plus, comprehensive route surveys for complex movements where necessary are also part of the services offered.</p>
                       </div>



                       <div class="entry-why">
                          <div class="entry-bio">
                            <span style="font-size:18px; color:black"><strong>Our services include</strong> </span>
                          </div>
                          <div class="row">
                              @component('frontend.components.pointsList',['title'=>'conventional shipping'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Ro-Ro services worldwide'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'FCL/LCL service'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Heavy lift and oversized cargo'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Stevedoring services'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Potline giver service'])
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
