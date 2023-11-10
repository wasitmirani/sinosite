<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{route('home')}}" class="" aria-expanded="false">
                <i class="flaticon-025-dashboard"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li><a href="{{route('dashboard.projects')}}" class="" aria-expanded="false">
            <i class="flaticon-022-copy"></i>
            <span class="nav-text">Projects</span>
        </a>
        </li>
        <li><a href="3" class="" aria-expanded="false">
            <i class="flaticon-022-copy"></i>
            <span class="nav-text">Blogs</span>
        </a>
        </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-050-info"></i>
                    <span class="nav-text">Setting</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>

                </ul>
            </li>
            <li>
        </li>



        </ul>
        <div class="dropdown header-profile2 ">
            <div class="header-info2 text-center">
                <img src="{{asset('images/profile/pic1.png')}}" alt="">
                <div class="sidebar-info">
                    <div>
                        <h5 class="font-w500 mb-0">{{Auth::user()->name}}</h5>
                        <span class="fs-12">{{Auth::user()->email}}</span>
                    </div>
                </div>
                <div>
                    <a href="javascript:void(0);" class="btn btn-md text-secondary">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="text-center"><strong>{{config('app.name')}} Dashboard</strong> © {{date('Y')}} All Rights Reserved</p>
            <p class="fs-12 text-center">Made with <span class="heart"></span> by {{config('app.name')}} </p>
        </div>
    </div>
</div>
