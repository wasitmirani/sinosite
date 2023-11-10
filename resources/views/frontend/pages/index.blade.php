
@extends('layouts.frontend.master')


@section('content')
@push('styles')
<style type="text/css">
.features {
    padding-top: 440px;
    padding-bottom: 35px;
}
.cases-standard .carousel-navs .owl-nav .owl-prev {
    left: -45px;
    display: none;
}
.cases-standard .carousel-navs .owl-nav .owl-next {
    right: -45px;
    display: none;

}
.heading.heading-3 {
    margin-bottom: 10px;
}

.cta {
    overflow: visible;
    padding-top: 50px;
    padding-bottom: 0;
}
.widget-reservation {
    position: relative;
    overflow: hidden;
    padding-top: 19px;
}
.about.about-2 {
    padding-top: 51px;
}
.cta.cta-3 {
    padding-top: 50px;
}
.cta.cta-3 .action-panels {
    padding-top: 12px;
    -webkit-transform: translateY(245px);
    -ms-transform: translateY(245px);
    transform: translateY(245px);
    margin-top: -245px;
}
.cta .action-panel .action-panel-content {
    position: absolute;
    bottom: 0;
    left: 0;
    background-color: #e11d07;
    -webkit-transition: .3s ease-in-out;
    -o-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    padding: 35px 40px;
    border-radius: 0 4px 0 4px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 230px;
    height: 92px;
    z-index: 99;
}
.cta .prief-set p {
    font-family: roboto,sans-serif;
    font-weight: 300;
    font-size: 17px;
    line-height: 27px;
        text-transform: initial;
    color: #f9f9f9;
    margin-bottom: 42
px
;
    text-transform: initial;
}
.heading .heading-subtitle {
    font-family: roboto,sans-serif;
    text-transform: initial;
    color: #e11d07;
    font-size: 15px;
    font-weight: 700;
    line-height: 1;
    margin-bottom: -71px;
}
.slider .slide .slide-content .slide-headline {
    font-family: rubik,sans-serif;
    font-weight: 500;
    font-size: 58px;
    line-height: 80px;
    color: #fff;
    margin-bottom: 25px;
    text-transform: initial;
}
.about.about-5 {
    padding-bottom: 49px;
}
section {
    background-color: #fff;
    padding: 69px 0;
    overflow: hidden;
}
</style>

@endpush
<section class="slider slider-1" id="slider-1" >
    <div class="container-fluid pr-0 pl-0">
       <div class="carousel owl-carousel custom-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800" data-slider-id="#custom-carousel">
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="{{asset('/assets/images/sliders/serivice.png')}}" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline"></p>
                         <h1 class="slide-headline">Sustainable <br>cargo handling</h1>
                         {{-- <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p> --}}


                        @component('frontend.components.silderLinks')

                        @endcomponent
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
            <div class="bg-section"><img src="{{asset('assets/images/sliders/slider3.png')}}" alt="Background"></div>
            <div class="container">
               <div class="row">
                  <div class="col-12 col-lg-7">
                     <div class="slide-content">
                        <p class="slide-subheadline"></p>
                        <h3 class="slide-headline">Innovative  <br>transportation solutions</h3>
                        {{-- <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p> --}}
                        @component('frontend.components.silderLinks')

                        @endcomponent
                     </div>
                  </div>
               </div>
            </div>
         </div>
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="{{asset('assets/images/sliders/slide2.png')}}" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline"></p>
                         <h2 class="slide-headline">  Culture which  <br> promotes growth</h2>
                         {{-- <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p> --}}
                         @component('frontend.components.silderLinks')

                         @endcomponent
                      </div>
                   </div>
                </div>
             </div>
          </div>

          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark" style="background-position:center bottom;">
             <div class="bg-section"><img src="assets/images/sliders/slide4.jpeg" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline"></p>
                         <h2 class="slide-headline">Exceptional  <br>teamwork </h2>
                         {{-- <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p> --}}
                         @component('frontend.components.silderLinks')

                         @endcomponent
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="services-bar" id="servicesBar">
    <div class="container">
       <div class="row no-gutters">
        <div class="col-12 col-md-6 col-lg-3 services-bar-card active">

            <i class="thumb-icon flaticon-019-box-2"> </i>
            <div class="thumb-body">
               <p>Reliable</p>
               <h3> <a href="{{route('services.ocean.freigh')}}">Ocean Freight services</a></h3>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card ">
            <i class="thumb-icon flaticon-010-cargo"> </i>
            <div class="thumb-body">
               <p>Efficient</p>
               <h3> <a href="{{route('services.ship.agency')}}">Ship Agency services</a></h3>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card">
            <i class="thumb-icon flaticon-033-checklist"></i>
            <div class="thumb-body">
               <p>Speed </p>
               <h3> <a href="{{route('services.custom.clearance')}}">Custom clearance</a></h3>
            </div>
         </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card ">
             <i class="thumb-icon flaticon-004-trailer-1 "></i>
             <div class="thumb-body">
                <p>sustainable </p>
                <h3> <a href="{{route('services.road.transport')}}">Road Transport services</a></h3>
             </div>
          </div>




       </div>
    </div>
 </section>

    @component('frontend.components.aboutus')

    @endcomponent

 <section class="cta bg-overlay bg-overlay-dark2" id="cta-1">
    <div class="bg-section"><img src="assets/images/cta/1.png" alt="background"></div>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-6">
             <div class="heading heading-2 heading-light">
                <p class="heading-subtitle">Dedicated customer teams & an agile services</p>
                <h2 class="heading-title">Global Logistics Partner To World’s Famous Brands</h2>
             </div>
          </div>
          <div class="col-12 col-lg-6">
             <div class="icon-set">
                <div class="icon-panel"> <i class="icon flaticon-016-payment-terminal"></i><span>transparent pricing</span></div>
                <div class="icon-panel"> <i class="icon flaticon-014-box-3"></i><span>fast, effecient delivery</span></div>
                <div class="icon-panel"> <i class="icon flaticon-001-scale-1"></i><span>warehouse storage</span></div>
             </div>
          </div>
          <div class="col-12">
             <div class="contact-panel">
                <div class="contact-types">
                    <a class="button quote-btn active" href="javascript:void(0)" data-form="quoteFormActive"> <i class="flaticon-020-order"> </i><span>get in touch</span></a>
                    <a class="button track-btn " href="javascript:void(0)" data-form="trackFormActive"> <i class="flaticon-009-shipping-1"> </i><span>Join Us</span></a></div>
                <div class="contact-card">
                   <div class="contact-body quoteFormActive">
                      <div class="row">
                         <div class="col-12 col-lg-8">
                            <form class="contactForm quote-form mb-0" method="post" action="#">
                            @livewire('contactus')

                            </form>
                            <form class="contactForm track-form mb-0" method="post" action="assets/php/contact.php">
                             @livewire('career-form')

                            </form>
                         </div>


                     <div class="col-12 col-lg-4">
                            <div class="apply-card widget widget-reservation">
                               <img src="assets/images/contact/1.jpg" alt="Background Image">
                               <div class="widget-content">
                                  <h5>Download Company Profile</h5>
                                  <p>We pride ourselves on providing the best logistics services all over the world. </p>
                                  <a class="btn btn--white" href="{{url('/assets/profile/profile.pdf')}}" download><i class="icon-arrow-right"></i>Download</a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="features bg-gray" id="features-1">
    <div class="container">
       <div class="heading heading-4">
          <div class="row">
             <div class="col-12 col-lg-6">
                <p class="heading-subtitle">Safe & reliable cargo solutions </p>
                <h1>Our Services</h1>
             </div>

          </div>
       </div>
       <div class="row">
        <div class="carousel owl-carousel carousel-navs carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="3000">
            <div class="case-item">
                <div class="case-item-warp">
            @component('frontend.components.serviceCard',
            [
                'icon'=>'flaticon-019-box-2',
                'name'=>'ocean Freight',
                'link'=>route('services.ocean.freigh'),
                'short_description'=>'We work with leading carriers and use an expanding network of agents, partners, as well as our own offices around the world.  This enables us to give you global service backed by the extensive expertise of our local teams.'
            ])
            @endcomponent
          </div>

            </div>
            <div class="case-item">
                <div class="case-item-warp">
            @component('frontend.components.serviceCard',
            [
                'icon'=>'flaticon-010-cargo',
                'name'=>'ship agency',
                'link'=>route('services.ship.agency'),
                'short_description'=>'Working with us vessel principals and service providers means benefitting from our flexible, fully integrated multi-model logistic solutions and quick transit times.'
            ])
            @endcomponent
          </div>
            </div>
          {{-- CUSTOM CLEARANCE --}}
          <div class="case-item">
            <div class="case-item-warp">
            @component('frontend.components.serviceCard',
            [
                'icon'=>'flaticon-033-checklist',
                'name'=>'custom clearance',
                'link'=>route('services.custom.clearance'),
                'short_description'=>'To ensure timely commitment and safe delivery of the cargo, our top in-house custom clearance department has hands-on experience in handling every aspect of the customs clearance processes, be it communicating with the custom officials or offering consultancy services.'
            ])
            @endcomponent
          </div>
          </div>

          <div class="case-item">
            <div class="case-item-warp">
                @component('frontend.components.serviceCard',
                [
                    'icon'=>'flaticon-004-trailer-1',
                    'name'=>'Road Transport ',
                    'link'=>route('services.road.transport'),
                    'short_description'=>'Our experience as a road logistics specialist, in combination with an efficient transport network is what makes us a major global intermodal player.'
                ])
                @endcomponent
            </div>
          </div>

          <div class="case-item">
            <div class="case-item-warp">
                @component('frontend.components.serviceCard',
                [
                    'icon'=>'flaticon-002-warehouse',
                    'name'=>'Warehousing',
                    'link'=>route('services.ware.house'),
                    'short_description'=>'When it comes to the movement of goods across suppliers, vendors, and customers, efficiency and traceability are of vital importance. That’s why our flexible warehousing and distribution solutions offer real-time cargo track and trace along with dedicated, shared, and refer warehousing and distribution facilities.'
                ])
                @endcomponent
            </div>
          </div>
        </div>
       </div>

    </div>
    <div class="more-features mt-4">
        <p>Logistic & Transport Solutions Saves Your Time. <a href="{{route('services.all')}}">Find your solution </a></p>
     </div>
 </section>
 <section class="about about-2 about-5" id="about-5">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-5">
              @component('frontend.components.whyus')

              @endcomponent

          </div>
          <div class="col-12 col-lg-6 offset-lg-1">
             <div class="about-img abput-img-text">
                <div class="about-img-warp">
                   <div class="bg-section"><img class="img-fluid" src="{{asset('assets/images/about/why.png')}}" alt="whyus Image"></div>
                </div>
                <div class="about-card">
                   <h6>Flexible, Improved & Accelerated Solutions</h6>
                   <p>Providing full range of service in the sphere transportation .</p>
                   <a href="{{route('services.all')}}"><i class="icon-arrow-right"></i> our services</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

 <section class="cta cta-3 bg-theme" id="cta-3">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-12 col-lg-12">
             <div class="heading heading-2 heading-light">
                <p class="heading-subtitle"></p>
                <h2 class="heading-title">What Gives Us Our Strength?</h2>
             </div>
          </div>
          <div class="col-12 col-lg-6 offset-lg-1">
          <div class="prief-set">

            {{-- <p>Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.</p> --}}
          </div>
          </div>
          <div class="col-12 col-lg-10 offset-lg-1">
            <div class="prief-set">
                <ul class="advantages-list">
                   <li><i class="fas fa-check-circle"></i> <p>Sinotrans Group’s global footprint, vast knowledge, and impeccable reputation.</p> </li>
                   <li><i class="fas fa-check-circle"></i> <p>The ability to provide one-window solutions and manage all operations in-house,     adhering to a service level of the highest quality.</small></li>
                   <li><i class="fas fa-check-circle"></i> <p>Extensive experience with all project operations.</small></li>
                   <li><i class="fas fa-check-circle"></i> <p>Unmatched local teams and partners, including the home-grown teams from China.</small></li>
                   <li><i class="fas fa-check-circle"></i> <p>A proprietary team of highly experienced drivers and modern equipment.</small></li>
                   <li><i class="fas fa-check-circle"></i> <p>Strong customer service orientation.</small></li>
                   <li><i class="fas fa-check-circle"></i> <p>A profound knowledge of policies and regulations, plus a team well-versed in all relevant nuances.</small></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="action-panels">
          <div class="row no-gutters">
             <div class="col-12 col-lg-6">
                <div class="action-panel">
                   <div class="action-panel-img">
                      <div class="bg-section"><img src="{{asset('assets/images/cta/cpec.png')}}" alt="image"></div>
                   </div>
                   <div class="action-panel-content">
                      {{-- <div class="panel-icon">
                          <i class="flaticon-015-scale"></i></div> --}}
                      <div class="panel-heading">
                         <h6 class="text-light">Our Role In CPEC</h6>
                      </div>
                      {{-- <a href="javascript:void(0)"><i class="icon-arrow-right"></i></a> --}}
                   </div>
                </div>
             </div>
             <div class="col-12 col-lg-6">
                <div class="action-panel">
                   <div class="action-panel-img">
                      <div class="bg-section"><img src="{{asset('assets/images/cta/team.png')}}" alt="Image"></div>
                   </div>
                   <div class="action-panel-content inverted">
                      {{-- <div class="panel-icon"><i class="flaticon-017-pallet"></i></div> --}}
                      <div class="panel-heading">
                         <h6 class="text-light">Sinotrans Logistics Team </h6>
                      </div>
                      {{-- <a href="javascript:void(0)"><i class="icon-arrow-right"></i></a> --}}
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="cases-clients bg-parllax" id="cases-clients-1">
    <div class="cases-standard">
       <div class="container">
          <div class="heading text-center">
             <p class="heading-subtitle">Explore Recent Work</p>
             <h2 class="heading-title">featured projects</h2>
          </div>
          <div class="row">

                <div class="carousel owl-carousel carousel-navs carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="3000">
                    @foreach ($projects as $project)
                        @component('frontend.components.projectCard',['project'=>$project])
                        @endcomponent
                    @endforeach

                </div>

          </div>
       </div>
    </div>
    <div class="clients clients-carousel clients-1 pt-0">
       <div class="container">
          <div class="row">
             <div class="col-12 col-lg-8 offset-lg-2">
                <div class="heading heading-5 text-center">
                   <p class="heading-subtitle">Join us today</p>
                   <h2 class="heading-title">Our Memberships & Affiliations</h2>
                   <p class="heading-fdesc">We take pride in affiliating ourselves with leading regulatory bodies related to our industry, we enforce best practices and the highest standards in every segment of our business.</p>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-12 ">
                <div class="carousel owl-carousel" data-slide="6" data-slide-rs="0.5" data-autoplay="true" data-nav="false" data-dots="true" data-space="0.8" data-loop="true" data-speed="500">
                   <div class="client brands-images"><img src="{{asset('assets/images/clients/FIATA-logo.png')}}" alt="FIATA-logo" style="height: 90px;  "></div>
                   <div class="client brands-images"><img src="{{asset('assets/images/clients/Pakistan_Customs_Seal.png')}}" alt="Pakistan_Customs clearnes logo" style="height: 90px;"></div>

                 <div class="client brands-images"><img src="{{asset('assets/images/clients/pifa.png')}}" alt="client" style="height:90px; padding: 10px 10px 10px; "></div>
                  <div class="client brands-images"><img src="{{asset('assets/images/clients/iso1.png')}}" alt="iso" style="height:90px;  padding: 10px 10px 10px;"></div>
                  <div class="client brands-images"><img src="{{asset('assets/images/clients/iso2.png')}}" alt="iso" style="height:90px;  padding: 10px 10px 10px;"></div>
                  <div class="client brands-images"><img src="{{asset('assets/images/clients/iso3.png')}}" alt="iso" style="height:90px;  padding: 10px 10px 10px;"></div>
                 <!--<div class="client brands-images"><img src="{{asset('assets/images/clients/apsalogo.png')}}" alt="apsa pakistan logo" style="height:90px; "></div>-->
               </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="testimonial testimonial-3 bg-overlay bg-overlay-theme">
    <div class="bg-section"> <img src="{{asset('assets/images/background/bgtitle.png')}}" alt="background-img"></div>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-6">
             <div class="heading heading-light heading-6">
                <p class="heading-subtitle"></p>
                <h2 class="heading-title">
                    Latest Equipment
                </h2>
                <p class="heading-desc">
                    Having proprietary equipment at hand creates a huge advantage over other players in the market, reducing dependency on other links in the chain - a value Chinese clients deeply appreciate. This advantage allows the organization to provide an unmatched level of service and a near-total command of project logistics, all thanks to the growing team of experts.
                </p>
                <a class="btn btn--transparent btn--inverse" href="{{route('services.all')}}">our services</a>
             </div>
          </div>

       </div>
    </div>
 </section>
 {{-- <section class="blog blog-grid" id="blog-1">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-6 offset-lg-3">
             <div class="heading heading-7 text-center">
                <p class="heading-subtitle">insight and trends</p>
                <h2 class="heading-title">recent articles</h2>
                <p class="heading-desc">Follow our latest news and thoughts which focuses exclusively on insight, industry trends, top news headlines.</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class=" col-12 col-md-6 col-lg-4">
             <div class="blog-entry">
                <div class="entry-img"><a href="blog-single.html"><img src="assets/images/blog/grid/1.jpg" alt="Importers achieve cost savings through the First Sale rule!"></a></div>
                <div class="entry-content">
                   <div class="entry-category"><a href="javascript:void(0)">cargo</a><a href="javascript:void(0)">insights</a></div>
                   <div class="entry-title">
                      <h4><a href="blog-single.html">Importers achieve cost savings through the First Sale rule!</a></h4>
                   </div>
                   <div class="entry-date"><span class="month">jan 20</span><span class="date">2021</span></div>
                   <div class="entry-bio">
                      <p>The trade war currently ensuing between the nations around the globe, fiercely with China, shows no signs of the first set of tariffs levied against solar...</p>
                   </div>
                   <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                </div>
             </div>
          </div>
          <div class=" col-12 col-md-6 col-lg-4">
             <div class="blog-entry">
                <div class="entry-img"><a href="blog-single.html"><img src="assets/images/blog/grid/2.jpg" alt="Cargo flow through better supply chain visibility, control."></a></div>
                <div class="entry-content">
                   <div class="entry-category"><a href="javascript:void(0)">warehouse</a><a href="javascript:void(0)">construction</a></div>
                   <div class="entry-title">
                      <h4><a href="blog-single.html">Cargo flow through better supply chain visibility, control.</a></h4>
                   </div>
                   <div class="entry-date"><span class="month">jan 23</span><span class="date">2021</span></div>
                   <div class="entry-bio">
                      <p>Global provider connected products for consumers, and enterprises , supply chain control is everything, provide visibility and traceability needed for...</p>
                   </div>
                   <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                </div>
             </div>
          </div>
          <div class=" col-12 col-md-6 col-lg-4">
             <div class="blog-entry">
                <div class="entry-img"><a href="blog-single.html"><img src="assets/images/blog/grid/3.jpg" alt="Importance of specialized focus in Projects, Oil &amp; Gas Logistics?"></a></div>
                <div class="entry-content">
                   <div class="entry-category"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">distrbution</a></div>
                   <div class="entry-title">
                      <h4><a href="blog-single.html">Importance of specialized focus in Projects, Oil &amp; Gas Logistics?</a></h4>
                   </div>
                   <div class="entry-date"><span class="month">jan 24</span><span class="date">2021</span></div>
                   <div class="entry-bio">
                      <p>Our team provides skilled &amp; experienced managers who know the intricacies of this vertical and focus on providing solutions in Oil &amp; Gas sector...</p>
                   </div>
                   <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section> --}}
 <section class="map map-3" id="map-1">
 @component('frontend.components.officeLocation')
 @endcomponent
</section>
@endsection
