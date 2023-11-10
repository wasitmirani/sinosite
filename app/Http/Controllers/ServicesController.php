<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class ServicesController extends Controller
{
    //
    public function services(){
    $title="Services";
    $des="Sinotrans Logistics Pakistan is a holistic logistic solutions provider, aiming to provide door to-door services to meet every one of our customers’ logistical needs; All as part of the group recognized  for its portfolio of high-profile clients, projects and offering 360-degree services. Our extensive network of cargo agents expertly handles air and ocean cargo in one seamless transaction. Our range of services includes";
    $this->setSeo($title,$des);
    $projects=Project::latest()->with('industry')->take(8)->get();
    return view('frontend.pages.services.index',compact('projects'));
    }
    public function oceanFreigh(){
        $title="Ocean Freight";
        $des="Sinotrans Logistics Pakistan is We work with leading carriers and use an expanding network of agents, partners, as well as our own offices around the world.  This enables us to give you global service backed by the extensive expertise of our local teams.
        Working with us means benefitting from our flexible, fully integrated multi-model logistic solutions, competitive rates and quick transit times. Our all-inclusive ocean freight service utilizes the most efficient routes to ensure your cargo reaches its destination safely and on time.
        We also provide full cargo routing proposals, including advice on cargo stowage, and securing for out of gauge, heavy and otherwise ‘exceptional’ cargoes. We also offer comprehensive route surveys for complex movements where necessary.";
        $this->setSeo($title,$des);
        return view('frontend.pages.services.oceanFreigh');
    }

    public function shipAgency(){
        $title="Ship Agency";
        $des="Working with us vessel principals and service providers means benefitting from our flexible, fully integrated multi-model logistic solutions and quick transit times. Our experienced and dedicated team provides outstanding handling of all types of cargos including heavy lifts and oversized project cargos, as well as communication and knowledge of ports and compliance requirements at all Pakistani ports. Our success has always been our ability to anticipate and adapt and therefore keep our pace with our customers’ needs and demands.";
        $this->setSeo($title,$des);
        return view('frontend.pages.services.shipAgency');
    }
        public function shipAgencyV2(){
        $title="Ship Agency Service";
        $des="Our shipping agency ensures the safety of your cargo not only at the time of its departure and at the time of its arrival but also at the port and during the transit of the carrying vessel. Our experienced and qualified staff members provide round-the-clock services to assure that no quality standards are disregarded or sacrificed. We have the upper hand and cordial relationship with Port & Customs Authorities all over Pakistan, being part of the All-Pakistan Shipping Association (APSA). We have our own Port Captain to supervise the discharging/loading of cargo and make sure of timely berthing/sailing of the vessels. Port Captains are deployed 24/7 (365). We as agents take care of our owner’s responsibilities to ensure quick turn-around, Master requirements at Ports, and if any repair is required.
We have our own workshop to handle any problems onboard the vessels.
";
        $this->setSeo($title,$des);
        return view('frontend.pages.services.shipAgencyV2');
    }
    
    
    public function customClearance(){
        $title="Custom Clearance ";
        $des="To ensure timely commitment and safe delivery of the cargo, our top in-house custom clearance department has hands-on experience in handling every aspect of the customs clearance processes, be it communicating with the custom officials or offering consultancy services.";
        $this->setSeo($title,$des);
        return view('frontend.pages.services.customClearance');
    }
    public function roadTransport(){
        $title="Road Transport";
        $des="Our experience as a road logistics specialist, in combination with an efficient transport network is what makes us a major global intermodal player. We offer effective and reliable transportation solutions ranging from a Containerised breakbulk and heavy lift, full truckload, and Less-Than-Truckload movement. Furthermore, with a proprietary fleet of specialized extendible trailers for heavy and oversized movement we can ensure that even your heaviest cargo can be moved quickly and safely, no matter the dimension and bulk. In addition, having an inhouse workshop and maintenance experts allows us to provide on location repair and maintenance services, significantly reducing lead time and extending adaptability.";
        $this->setSeo($title,$des);
        return view('frontend.pages.services.roadTransport');
    }

    public function wareHouse(){
        $title="Warehousing";
        $des="When it comes to the movement of goods across suppliers, vendors, and customers, efficiency and traceability are of vital importance. That’s why our flexible warehousing and distribution solutions offer real-time cargo track and trace along with dedicated, shared, and refer warehousing and distribution facilities. In addition, all our warehouses are equipped with leading edge warehouse management systems, making it easier for real time cargo track and trace.";
        $this->setSeo($title,$des);
        return view('frontend.pages.services.wareHouse');
    }
    public function setSeo($title,$description){
        SEOTools::setTitle($title." | ".config('app.name'));
        SEOTools::setDescription(config('app.name')." ".$description);
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@'.url('/'));
        SEOTools::jsonLd()->addImage(url('/').'/images/logo/logo-dark.png');
    }


}
