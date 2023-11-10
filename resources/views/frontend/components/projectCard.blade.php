
@push('styles')
<style type="text/css">
.cases-standard .carousel-navs .owl-nav .owl-prev {
    left: -45px;
    display: none;
}
.cases-standard .carousel-navs .owl-nav .owl-next {
    right: -45px;
    display: none;

}
.cases-standard .case-item .case-content {
    padding-top: 33px;
    padding-bottom: 28px;
    height: 320px;
    position: sticky;
    background-color: #fff;
}
</style>

@endpush
<div class="case-item ">
    <a href="{{route('project.detail',['slug'=>$project->slug])}}">
    <div class="case-item-warp">
       <div class="case-img">
           <img src="{{$project->thumbnail}}" alt="{{$project->slug}}" style="    height: 212px;
           "></div>
       <div class="case-content">
          <div class="case-title">
             <h5><a href="{{route('project.detail',['slug'=>$project->slug])}}">
                {{ Str::limit($project->title,35,'...')}}
             </a></h5>
          </div>
          <div class="case-title">
              <a href="{{route('projects',['query'=>$project->industry->slug])}}">
                <span  style="font-size:18px; color:#114b89">
                    {{$project->industry->name}}
                </span>
                </a></div>
                <div class="case-cat">
                    <a href="javascript:void(0)">{{$project->destination}}</a>
                </div>
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
