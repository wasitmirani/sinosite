
@extends('layouts.frontend.master')
@push('styles')
<style type="text/css">
.pulse .phone {
    font-size: 50px;
    color: #e11d07;
    position: absolute;
    top: 55%;
    left: -35.5%;
    width: 17px;
    height: 13px;
    margin: -10.5px 0 0 -6.33333333333px;
    display: inline-block;
    border-radius: 50%;
    opacity: 0.87;
    /* background: #d20000; */
    z-index: 2;
}

.pulse div.one {
    animation-name: pulse;
}
.pulse div.two {
    animation-name: pulse;
    animation-delay: 1000ms;
}
.pulse div.three {
    animation-name: pulse;
    animation-delay: 2000ms;
}
.pulse div {
    position: absolute;
    top: 50%;
    left: 50%;
    border: 1px solid #d30404;
    border-radius: 50%;
    animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    animation-iteration-count: infinite;
    animation-duration: 3200ms;
    opacity: 0;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}

        .pulse {
            width: 100px;
            height: 100px;
            position: relative;
        }
    #two {
        position: absolute;
        top: 75%;
        left: 40%;
    }
</style>

@endpush
@section('content')

<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/15.jpg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-6">
    <div class="title text-lg-left">
    <div class="title-sub-heading">
    {{-- <p>Dedicated customer teams &amp; an agile services</p> --}}
    </div>
    <div class="title-heading">
    <h1>Map</h1>
    </div>
        @component('frontend.components.Breadcam',['back_link'=>'Company','active_link'=>'Map'])
        @endcomponent

    </div>

    </div>

    </div>

    </section>

    <section class="about about-2 about-5" id="about-5">
        <div class="container">
        <div class="row">
        <div class="col-12 col-lg-5">
        <div class="heading heading-9">
        {{-- <p class="heading-subtitle">Providing Full Range Of Transportation .</p> --}}
        <h2 class="heading-title">About Sinotrans </h2>
        </div>
        <div class="about-block">
        <div class="block-left">
        <p>
            Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.</p>

        </div>
        </div>
        <div class="signature-block">
        <div class="signature-body">
        <span>{{config('app.name')}}</span>

        </div><img style="width: 80px;" src="{{asset('/assets/images/logo/logo-dark.png')}}" alt="{{config('app.name')}}">
        </div>
        </div>

        <div class="col-12 col-lg-6 offset-lg-1">
        <div class="about-img abput-img-text">
        <div class="about-img-warp">
        <div class="bg-section"><img class="img-fluid" src="{{asset('/assets/images/map.png')}}" alt="about Image"></div>
        </div>

        <div class="pulse" id="two">
            <i class="phone fa fa-map-marker"></i>
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>

        </div>
        </div>
        </div>

        </div>

        </section>

@endsection
