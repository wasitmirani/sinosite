<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Industry;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class CaseStudiesController extends Controller
{
    //
    public function index(Request $request){
        $this->setSeo("Case Studies","Case Studies");
        $industry_slug=request('query');
        if(!empty($industry_slug)){


            $industry=Industry::where('slug',$industry_slug)->first();
            $industries=Project::where('industry_id',$industry->id)->latest()->groupBy('industry_id')->pluck('industry_id');
            $industries=Industry::whereIn('id',$industries)->select('id','name')->get();
            $projects=Project::where('industry_id',$industry->id)->with('industry')->take(12)->get();
        }
        else {
        $industries=Project::latest()->groupBy('industry_id')->pluck('industry_id');
        $industries=Industry::whereIn('id',$industries)->select('id','name')->get();
        $projects=Project::with('industry')->take(20)->get();
        }

        return view('frontend.pages.projects.index',compact('industries','projects'));
    }

    public function projectDetail(Request $request){
        $project=Project::where('slug',$request->slug)->with('projectSections')->first();

        $this->setSeo($project->title,$project->description);
        $projects=Project::where('industry_id',$project->industry_id)->whereNotIn('id',[$project->id])->with('industry')->take(8)->get();
        $industries=Industry::whereNotIn('id',[$project->industry_id])->get();
        return view('frontend.pages.projects.detail',compact('project','industries','projects'));
    }

    public function setSeo($title=null,$description){
        SEOTools::setTitle($title." | ".config('app.name'));
        SEOTools::setDescription(config('app.name')." ".$description);
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@'.url('/'));
        SEOTools::jsonLd()->addImage(url('/').'/images/logo/logo-dark.png');
    }
}
