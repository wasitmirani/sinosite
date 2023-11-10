


@extends('layouts.frontend.master')
@section('content')
@push('styles')
<style type="text/css">
    .case-study.case-study-2 {
    padding-top: 57px;
    padding-bottom: 100px;
}
.about.about-2 {
    padding-top: 31px;
}
.about.about-5 {
    padding-bottom: 22px;
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
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/serivice3.png')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-6">
    <div class="title text-lg-left">
    <div class="title-sub-heading">  <p style="text-transform:initial !important;">Dedicated customer teams &amp; an agile services</p>
    </div>
    <div class="title-heading">
    <h1> Our Strength</h1>
    </div>
        @component('frontend.components.Breadcam',[ 'active_link'=>'Why Sinotrans'])
        @endcomponent

    </div>
    </div>
    </div>
    </section>

     <section class="about about-2 about-5" id="about-5" >
        <div class="container">
        <div class="row">
        <div class="col-12 col-lg-7">
        <div class="heading heading-9">

        <h2 class="heading-title"><strong>  What Gives Us Our Strength?</strong></h2>
        </div>
        <div class="about-block">
        <div class="block-left">
            <div class="row" style="text-align: justify;">
                <ul class="advantages-list">

                @component('frontend.components.pointsList',['col'=>12,'title'=>'Sinotrans Group’s global footprint, knowledge and impeccable reputation'])
                @endcomponent
                @component('frontend.components.pointsList',['col'=>12,'title'=>'Our ability to provide a one window solution and manage all operations in house'])
                @endcomponent
                @component('frontend.components.pointsList',['col'=>12,'title'=>'Extensive experience with project operations'])
                @endcomponent
                @component('frontend.components.pointsList',['col'=>12,'title'=>'Unmatched local team and partners, including our teams from China'])
                @endcomponent
                @component('frontend.components.pointsList',['col'=>12,'title'=>'Our proprietary team of highly experienced drivers and modern equipment'])
                @endcomponent
                @component('frontend.components.pointsList',['col'=>12,'title'=>'Strong customer service orientation'])
                @endcomponent
                @component('frontend.components.pointsList',['col'=>12,'title'=>'Well versed in policies & regulations'])
                @endcomponent
            </ul>

           </div>
        </div>
        </div>
        <div class="signature-block">

        </div>
        </div>

        <div class="col-12 col-lg-5 " >
          <img class="img-fluid" style="height:100%;"  src="{{asset('/assets/images/about/map.png')}}" alt="about Image">
        </div>

        </div>

        </section>

@endsection
