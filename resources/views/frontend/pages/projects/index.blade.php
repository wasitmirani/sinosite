@extends('layouts.frontend.master')
@push('styles')
<style type="text/css">
#wrapperParallax {
    position: relative;
    z-index: 1060;
    min-height: 40vh;
}
.cases-grid {
    padding: 40px 0 100px;
}
.cases-standard {
    padding: 30px 0 100px !important;
}
.case-item .case-img {
    position: relative;
    overflow: hidden;
    border-radius: 4px;
    height: 185px;
}
.cases-standard {
    padding: 30px 0 6px !important;
}
.bg-overlay-dark:before {
    background-image: -webkit-gradient(linear,left top,left bottom,from(#1B1A1A),color-stop(90%,rgba(27,26,26,0)));
    background-image: -o-linear-gradient(top,#1B1A1A 0%,rgba(27,26,26,0) 90%);
    background-image: linear-gradient(
177deg,#1B1A1A 0%,rgba(27,26,26,0) 50%);
}
</style>
@endpush
@section('content')
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/sinocollage.jpg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
       <div class="col-12 col-lg-6">
          <div class="title text-lg-left">
             <div class="title-sub-heading">
                {{-- <p>Dedicated customer teams &amp; an agile services</p> --}}
             </div>
             <div class="title-heading">
                <h1>Case Studies</h1>
             </div>
             @component('frontend.components.Breadcam',
             ['active_link'=>'Case Studies'])
             @endcomponent
          </div>
       </div>
    </div>
    </div>
 </section>


 <section class="cases-standard" id="workStandard">
    <div class="container">
       <div class="row">
          <div class="col-sm-12 col-md-12 col-md-12 cases-filter">
             <ul class="list-inline mb-0">

                 @if(count($projects) <1)
                 <h2 class="alert alert-warning text-center">Not found any case study</h2>
                 @else
                <li><a class="active-filter" href="javascript:void(0)" data-filter="*">ALL Cases</a></li>
                 @foreach ($industries as $item)

                 <li><a href="javascript:void(0)" data-filter=".filter-{{$item->id}}">{{$item->name}}</a></li>

                 @endforeach
                 @endif


             </ul>
          </div>
       </div>
       <div class="row" id="all-cases">


           @forelse ($projects as $project)
           <div class="case-item col-sm-6 col-md-6 col-lg-4  filter-{{$project->industry_id}}" style="position: absolute; left: 359.988px; top: 0px;">
            <a href="{{route('project.detail',['slug'=>$project->slug])}}">
            <div class="case-item-warp">
               <div class="case-img"><img src="{{$project->thumbnail}}" alt="{{$project->slug}}"></div>
               <div class="case-content">
                  <div class="case-title" style="font-size:13.5px;font-weight:700;">
                     <span >
                        <a href="{{route('project.detail',['slug'=>$project->slug])}}">
                        {{$project->title}}</a></span>
                  </div>
                  <div class="case-cat">
                    <a href="{{route('projects',['query'=>$project->industry->slug])}}">
                      <span  style="font-size:18px; color:#114b89">
                          {{$project->industry->name}}
                      </span>
                      </a></div>
                <div class="case-desc">
                   <p>
                    {{ Str::limit($project->short_description,100,"...")}}
                   </p>
                </div>
                <div class="case-more"><a href="{{route('project.detail',['slug'=>$project->slug])}}"><i class="icon-arrow-right"></i> explore case study</a></div>
               </div>
            </div>
            </a>
         </div>


         @empty

         @endforelse

       </div>
       <div class="row">
          {{-- <div class="col-sm-12 col-md-12 col-md-12 text-center mb-10"><a class="btn btn--primary" href="javascript:void(0)">Load More</a></div> --}}
       </div>
    </div>
 </section>


@endsection
