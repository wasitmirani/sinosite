<header class="header header-1 header-transparent" id="navbar-spy">
    <nav class="navbar navbar-expand-lg  navbar-bordered navbar-sticky {{request()->routeIs('contact') ? 'navbar-fixed' : ''}}   " id="primary-menu">
       <div class="container">
          <a class="navbar-brand" href="{{route('index')}}">
            @if(request()->routeIs('contact'))
            <img class="logo logo-light" style="max-width:100%;width: 260px;" src="{{asset('assets/images/logo/logo-dark.png')}}"  alt="{{config('app.name')}} Logo">
            @else
            <img class="logo logo-light" style="max-width:100%;width: 260px;" src="{{asset('assets/images/logo/logo-light.png')}}"  alt="{{config('app.name')}} Logo">
            @endif
            <img class="logo logo-dark" style="max-width:100%;width: 250px;" src="{{asset('assets/images/logo/logo-dark.png')}}"   alt="{{config('app.name')}} Logo"></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item {{request()->routeIs('index') ? 'active' : ''}}">
                   <a class="dropdown-toggle" href="{{route('index')}}" ><span>Home</span></a>
                </li>
                <li class="nav-item has-dropdown  {{request()->routeIs('company*') ? 'active' : ''}}">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>company</span></a>
                    <ul class="dropdown-menu">
                       <li class="nav-item   {{request()->routeIs('company.about-us') ? 'current' : ''}} "><a href="{{route('company.about-us')}}"><span>about us</span></a></li>
                       <li class="nav-item {{request()->routeIs('company.why-sinotrans') ? 'current' : ''}} "><a href="{{route('company.why-sinotrans')}}"><span>Why Sinotrans  </span></a></li>
                       <li class="nav-item {{request()->routeIs('company.our.strength') ? 'current' : ''}}"><a href="{{route('company.our.strength')}}"><span>Our Strength</span></a></li>
                       {{-- <li class="nav-item {{request()->routeIs('map') ? 'current' : ''}}"><a href="{{route('map')}}"><span>map location</span></a></li> --}}
                       {{-- <li class="nav-item"><a href="page-careers.html"><span>careers</span></a></li> --}}
                    </ul>
                 </li>
                <li class="nav-item has-dropdown  {{request()->routeIs('services*') ? 'active' : ''}}">
                    <a class="dropdown-toggle" href="{{route('services.all')}}" data-toggle="dropdown"><span>services</span></a>
                        <ul class="dropdown-menu">
                                   <li class="nav-item {{request()->routeIs('services.ocean.freigh') ? 'current' : ''}} "><a href="{{route('services.ocean.freigh')}}"><span>Ocean Freight</span></a></li>
                                   <li class="nav-item {{request()->routeIs('services.ship.agency') ? 'current' : ''}}"><a href="{{route('services.ship.agency')}}"><span>Ship Agency</span></a></li>
                                   <li class="nav-item {{request()->routeIs('services.custom.clearance') ? 'current' : ''}}"><a href="{{route('services.custom.clearance')}}"><span>Custom Clearance</span></a></li>
                                   <li class="nav-item {{request()->routeIs('services.road.transport') ? 'current' : ''}}"><a href="{{route('services.road.transport')}}"><span>Road Transport</span></a></li>
                                   <li class="nav-item {{request()->routeIs('services.ware.house') ? 'current' : ''}}"><a href="{{route('services.ware.house')}}"><span>Warehousing</span></a></li>
                                </ul>
                 </li>


                <li class="nav-item ">
                    <a class="dropdown-toggle" href="{{route('projects')}}" ><span>case studies</span></a>
                 </li>

                {{-- <li class="nav-item has-dropdown">
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>features</span></a>
                   <ul class="dropdown-menu">

                      <li class="nav-item"><a href="track-shipment.html"><span>track &amp; trace</span></a></li>
                      <li class="nav-item"><a href="find-location.html"><span>find a location</span></a></li>
                      <li class="nav-item"><a href="faqs.html"><span>help &amp; fAQs</span></a></li>
                   </ul>
                </li> --}}
                @auth
                <li class="nav-item {{request()->routeIs('home') ? 'active' : ''}}">
                    <a class="dropdown-toggle" href="{{route('home')}}" ><span>Dashboard</span></a>
                 </li>
                @endauth

                <li class="nav-item {{request()->routeIs('contact') ? 'current' : ''}}"><a href="{{route('contact')}}"><span>contact</span></a></li>
             </ul>
             <div class="module-container">
                <div class="module module-search float-left">
                   {{-- <div class="module-icon search-icon"><i class="icon-search"></i><span class="title">search</span></div> --}}
                   <div class="module-content module-fullscreen module-search-box">
                      <div class="pos-vertical-center">
                         <div class="container">
                            <div class="row">
                               <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                  <form class="form-search">
                                     <input class="form-control" type="text" placeholder="type words then enter">
                                     <button></button>
                                  </form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <a class="module-cancel" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                   </div>
                </div>
                {{-- <div class="module-contact"><a class="btn btn--primary" href="{{route('contact')}}">request a quote</a></div> --}}
                {{-- <div class="module module-language">
                   <div class="selected"><span>en </span><i class="fas fa-chevron-down"></i></div>
                   <div class="lang-list">
                      <ul>
                         <li> <a href="javascript:void(0)">english</a></li>
                      </ul>
                   </div>
                </div> --}}
             </div>
          </div>
       </div>
    </nav>
 </header>
