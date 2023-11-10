@push('styles')
<style>
    .footer {
    background-color: #114b89;
    padding-top: 0;
    padding-bottom: 0;
}

.footer .footer-top {
    padding-top: 32px !important;
    padding-bottom: 26px;
    border-bottom: 2px solid #114b89;
}

.footer .footer-center {
    padding-top: 50px !important;
    padding-bottom: 10px !important;
}
.footer .footer-center {
    padding-top: 26px;
}
</style>

@endpush
<footer class="footer footer-1">

    <div class="footer-center">
       <div class="container">
          <div class="row">

             <div class="col-sm-6 col-md-6 col-lg-5 footer-widget widget-about">
                <div class="footer-widget-title">
                    <img class="footer-logo"  src="{{asset('assets/images/logo/logo-light.png')}}" alt="logo">
                   {{-- <h5><strong>  {{config('app.name')}}</strong> </h5> --}}
                </div>
                <div class="widget-content mt-1">
                   <p> Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.</p>
                  
                <a download  href="{{asset('/policy.pdf')}}"><h6 class="text-white mb-3" style="font-size: 16px;!important">
                    <i class="fa fa-download text-light"> </i> 
                    Download Integrated Management System Policy</h6></a>
               
                   <div class="module module-social">
                       <a class="share-facebook" href="https://www.facebook.com/sinotranspak/"><i class="fab fa-facebook-f text-light"> </i></a>
                       <a class="share-intagram" href="https://www.instagram.com/sinotranspak/?hl=en"><i class="fab fa-instagram text-light"></i></a>
                       <a class="share-twitter" href="https://pk.linkedin.com/company/sinotrans-logistics-pakistan-pvt-ltd"><i class="fab fa-linkedin text-light"></i></a></div>
                </div>
               
             </div>
             <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                <div class="footer-widget-title">
                   <h5><strong>Services</strong> </h5>
                </div>
                <div class="widget-content">
                   <ul>
                      <li><a href="{{route('services.ocean.freigh')}}">Ocean Freight</a></li>
                      <li><a href="{{route('services.ship.agency')}}">Ship Agency</a></li>
                      <li><a href="{{route('services.custom.clearance')}}">Custom Clearance </a></li>
                      <li><a href="{{route('services.ware.house')}}">Warehousing</a></li>
                      <li><a href="{{route('services.road.transport')}}">Road Transport </a></li>

                   </ul>
                </div>
             </div>
             <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                <div class="footer-widget-title">
                   <h5><strong>Case Studies</strong></h5>
                </div>
                @php
                    $industries=getCaseStudies();

                @endphp
                <div class="widget-content">
                   <ul>
                    @foreach ($industries as $item)
                    <li ><a href="{{route('projects',['query'=>$item->slug])}}"><span>{{$item->name}}</span></a></li>
                    @endforeach
                        
                   </ul>
                </div>
             </div>
             <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-contact">
                <div class="footer-widget-title">
                   <h5><strong>Quick Contact</strong></h5>
                </div>
                <div class="widget-content" style="color:white;">
                   <ul>
                      <li class="phone " ><a href="tel:+92(021) 35642730"><i class="fas fa-phone-alt"></i> +92(021) 35642730</a></li>
                      <li class="address">
                    <span >3rd Floor, Bahria Complex 3, Lalazar, MT Khan Road, Service Road, Naval Officers Residential Estate 1 Naval Officers Colony, Karachi, Karachi City, Sindh,Pakistan.</span>
                        </li>
                    
                   </ul>
                </div>
             </div>
          </div>
          <div class="clearfix"></div>
       </div>
    </div>
    <div class="footer-bottom">
       <div class="row">
          <div class="col-md-12 col-md-12 text--center footer-copyright">
             <div class="copyright text-light" ><span>&copy; {{date('Y')}}  {{config('app.name')}}  All Rights Reserved </span><a href="#"></a></div>
          </div>
       </div>
    </div>
 </footer>
