
@extends('layouts.frontend.master')
@section('content')
@push('styles')
<style type="text/css">
.about.about-2 {
    padding-top: 51px;
}
.heading.heading-3 {
    margin-bottom: 14px;
}
section {
    background-color: #fff;
    padding: 31px 0;
    overflow: hidden;
}
.about .about-img .counter {
    width: 200px;
    position: absolute;
    bottom: 10px;
    left: 0;
    z-index: 1;
}
.about .about-img.about-img-left .about-img-warp {
    right: auto;
    left: 0;
    /* height: 318px; */
    margin-top: 130px;
}
</style>

@endpush
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/about/about.png')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-6">
    <div class="title text-lg-left">
    <div class="title-sub-heading">
    <p style="text-transform:initial !important;">Dedicated customer teams &amp; an agile services</p>
    </div>
    <div class="title-heading">
    <h1>About Us</h1>
    </div>
        @component('frontend.components.Breadcam',['back_link'=>'Company','active_link'=>'About Us'])

        @endcomponent

    </div>

    </div>

    </div>

    </section>

    @component('frontend.components.aboutus')

    @endcomponent
@endsection
