<!-- Page preloader-->
<div class="page-loader">
    <div class="page-loader-body">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">

                <div class="circle-clipper left">
                    <div class="circle"> </div>
                </div>
                <div class="gap-patch">
                    <div class="circle"> </div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"> </div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"> </div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page-->
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-corporate">
            <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
                <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
                    <div class="rd-navbar-top-panel-inner">
                        <ul class="list-inline">
                            <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                                <ul class="list-comma">
                                    <li><a href="tel:#">+90-534-775-66-97</a></li>
                                </ul>
                            </li>
                            <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></li>
                            <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a href="mailto:#">mail@demolink.org</a></li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                            <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                            <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                            <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                            <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="rd-navbar-top-panel-inner"><a class="button button-sm button-secondary button-nina" href="https://www.templatemonster.com/website-templates/62466.html" target="_blank">buy template now</a></div>
                </div>
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="brand-name" href="http://127.0.0.1:8000"><img class="logo-default" src="{{asset('assets')}}/images/FlyHgs-logos_black.png" alt="" width="208" height="46"/><img class="logo-inverse" src="{{asset('assets')}}/images/logo-inverse-208x46.png" alt="" width="208" height="46"/></a></div>
                    </div>
                    <div class="rd-navbar-aside-center">
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->

                                
                                
                            <ul class="rd-navbar-nav">
                                <ul class="rd-navbar-nav">
                                    @foreach ($categorydata as $rs)
                                        
                                    
                                    <li class="@if($linkhome==1) active @endif"><a  href="http://127.0.0.1:8000/{{$rs->keywords}}">{{$rs->title}}</a>
                                    </li>

                                    
                                    @endforeach
                                    <li class="nav-item dropdown bg-warning">
                                        @auth
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <h3> {{ Auth::user()->name }}</h3>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/admin">Dashboard</a>
                                            <a class="dropdown-item" href="/admin/profile">Profile</a>
                                            <form action="/logout" method="post">@csrf<button class="dropdown-item" type="submit">Log out</button></form>
                                        </div>
                                        @else
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <h3> USER ISLEMLERI</h3>
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/register">Sign up</a>
                                            <a class="dropdown-item" href="/login">Log in</a>
                                          </div>
                                        @endauth
                                      </li>
                                </ul>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina" active href="http://127.0.0.1:8000/booking">Booking</a></div>
                </div>
            </nav>
        </div>
        
    </header>

