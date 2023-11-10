<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class FrontEndController extends Controller
{
    //

    public function index(){
        $title="Sinotrans";
        $des="Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.";
        $this->setSeo( $title, $des);
        $projects=Project::with(['industry','projectSections'])->take(9)->get();

        return view('frontend.pages.index',compact('projects'));
    }
    public function mapPak(){

        return view('frontend.pages.map');
    }
    public function about(){
        $title="About Us";
        $des="Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.";
        $this->setSeo( $title, $des);
        return view('frontend.pages.about');
    }
    public function whySinotrans(){
        $title="Why Sinotrans Limited";
        $des="Sinotrans specializes in managing complex, high-value, heavy-lift and over-dimensional project cargo and international freight forwarding services. Customers can count on us for reliable, professional, safe, and compliant cargo handling, while remaining responsive to constantly changing market needs.
        The unbeatable combination of our technology, service and people for our diverse customer base has made us a leading integrated logistics service provider in Pakistan with a reputation for multi-modal project cargo success backed by proven innovative logistics solutions and service excellence.";
        $this->setSeo($title, $des);
        return view('frontend.pages.whySinotrans');
    }
    public function contact(){
        $title="Contact Us";
        $des="Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.";
        $this->setSeo( $title, $des);
        return view('frontend.pages.contact');
    }
    public function ourStrength(){
        $title="Our Strength";
        $des="Sinotrans Group’s global footprint, knowledge and impeccable reputation
        Our ability to provide a one window solution and manage all operations in house, keeping a high service level
        Extensive experience with project operations
        Unmatched local team and partners, including our teams from China
        Our proprietary team of highly experienced drivers and modern equipment
        Strong customer service orientation
        Well versed in policies & regulations";
        $this->setSeo($title, $des);
        return view('frontend.pages.ourStrength');
    }
    public function setSeo($title=null,$description){
        SEOTools::setTitle($title." | ".config('app.name'));
        SEOTools::setDescription(config('app.name')." ".$description);
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@'.url('/'));
        SEOTools::jsonLd()->addImage(url('/').'/images/logo/logo-dark.png');
    }
    public function services(){

        return view('frontend.pages.services');
    }
}
