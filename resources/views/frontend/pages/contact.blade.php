



@extends('layouts.frontend.master')
@section('content')
@push('styles')
<style type="text/css">
    .navbar .navbar-nav>li>a {
    font-family: roboto,sans-serif;
    font-size: 15px;
    text-transform: initial;
    font-weight: 700;
    line-height: 100px;
    color: #000000;
    text-transform: capitalize;
    padding: 0;
    position: relative;
    display: block;
}

.bg-overlay-dark:before {
    background-image: -webkit-gradient(linear,left top,left bottom,from(#1B1A1A),color-stop(90%,rgba(27,26,26,0)));
    background-image: -o-linear-gradient(top,#1B1A1A 0%,rgba(27,26,26,0) 90%);
    background-image: linear-gradient(
177deg,#1B1A1A 0%,rgba(27,26,26,0) 50%);
}
</style>

@endpush
<section class="map map-2 bg-overlay bg-overlay-dark bg-parallax" style="    margin-top: 100px;">

    <iframe
    width="600"
    height="450"
    style="border:1"
    loading="lazy"
    allowfullscreen
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCxcHXNubtbDr4mHGqxlCSvni-UQBmqkXY
      &q=Sinotrans+Pakistan+Pvt+Ltd&zoom=16">
  </iframe>
 </section>
 <section class="contact-info">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-4">
             <div class="row">
                <div class="col-12 col-sm-6 col-lg-12">
                   <div class="contact-details">
                      <h6>contact details</h6>
                      <ul class="list-unstyled info">
                         <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">3rd Floor, Bahria Complex 3, Lalazar, MT Khan Road, Service Road, Naval Officers Residential Estate 1 Naval Officers Colony, Karachi, Karachi City, Sindh.</a></li>
                         <li><span class="fas fa-envelope"></span><a href="mail:info@sinotrans.com.pk"><span >info@sinotrans.com.pk</span></a></li>
                         <li><span class="fas fa-phone-alt"></span><a href="tel:+92(021) 35642730">+92(021) 35642730</a></li>
                      </ul>
                   </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-12">
                   <div class="opening-hours">

                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-8">
            @livewire('contactus')
          </div>
       </div>
    </div>
 </section>

 @endsection
