@push('styles')


@endpush
<section class="about pt-70" id="about-1">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-5">
             <div class="about-img about-img-left">
                <div class="about-img-warp">
                   <div class="bg-section"><img src="{{asset('assets/images/about/about.jpg')}}" alt="about Image"></div>
                </div>
                <div class="counter">
                   <div class="counter-icon">
                    <i class="thumb-icon flaticon-004-trailer-1"></i>
                    {{-- <img src="{{ asset('assets/images/page-titles/projects.png')}}" width="100px"></img> --}}
                </div>
                   <div class="counter-num">
                      <span ></span>
                      <p>85+</p>
                   </div>
                   <div class="counter-name">
                      <h6>Projects</h6>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-7">
             <div class="heading heading-3">

                <h2 class="heading-title"><strong>ABOUT SINOTRANS</strong> </h2>
             </div>
             <div class="about-block">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="block-left">
                         <p class="">{{config('app.name')}} is a joint venture company between Sinotrans Limited, the largest integrated logistic group in China, and the Transhold Group, one of Pakistan's oldest and most esteemed logistics group.</p>
                         @if(!request()->routeIs('company.about-us'))
                         <p >

                            Since its launch in Pakistan in 2014, Sinotrans has and continues to offer road transportation, heavy lifting, and oversize transportation, along with customs clearance, shipping agency, owners’ husbandry, warehousing, containerized, breakbulk and ocean freight booking
                            services to and from Pakistan’s major trade points: Karachi Port, Port Qasim and Port Gwadar.
                        </p>
                        @else
                        <p>
                            Since its launch in Pakistan in 2014, Sinotrans has and continues to offer road transportation, heavy lifting, and oversize transportation, along with customs clearance, shipping agency, owners’ husbandry, warehousing, containerized, breakbulk and ocean freight booking services to and from Pakistan’s major trade points: Karachi Port, Port Qasim and Port Gwadar.

                            The dependability and timeliness of services provided to all destinations, along with a wide and diverse customer base, has made Sinotrans Pakistan the leading integrated logistics service provider in the country. Playing a significant role in contributing to the country’s national wealth, security and environmental well-being, from the Hub Power Project and equipment transport of the storied Orange Line Metro Lahore to the K2 And K3 Nuclear Power Plant Karachi. Sinotrans promises to deliver prosperity and progress with every project it undertakes.

                        </p>
                        @endif
                        @if(!request()->routeIs('company.about-us'))
                        <a href="{{route('company.about-us')}}"><i class="icon-arrow-right"></i> read more</a>
                        @endif
                      </div>
                   </div>
                   <div class="col-12 col-lg-5">
                      <div class="block-right">
                         <div class="detail">
                            <h6>Corporate Vision </h6>
                            <p>To become the leading integrated logistics services corporation in the country, offering unparalleled services across multiple sectors in Pakistan.</p>
                         </div>
                         <div class="detail">
                            <h6>Corporate Mission</h6>
                            <p>To continuously create business, social and environmental value, through consistent provision of the best solutions and services, with an unrelenting focus on customer needs and demands.</p>
                         </div>

                      </div>
                   </div>
                </div>
             </div>
             <div class="signature-block">
                {{-- <div class="signature-body">
                   <h6>Mr. Babar Badat</h6>
                   <p>Chairman</p>
                </div> --}}




                {{-- <img src="#" alt="signature"> --}}
             </div>
             {{-- <div class="row">
                <span class="mt-4">{{config('app.name')}}</span>

            </div><img style="width: 140px;" src="{{asset('/assets/images/logo/logo-dark.png')}}" alt="{{config('app.name')}}">
             </div> --}}
          </div>
       </div>
    </div>
 </section>
