@extends('layouts.frontbase')
@section('title','single PAGE')
@section('content')

<head>
    <!-- Site Title-->
    <title>Search Results</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]--> 
  </head>
  <body>
    <!-- Page preloader-->
    <div class="page-loader"> 
      <div class="page-loader-body"> 
        <div class="preloader-wrapper big active"> 
          <div class="spinner-layer spinner-blue"> 
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
      <header class="section page-header breadcrumbs-custom-wrap bg-gradient bg-secondary-2 novi-background bg-cover">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-default">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="2px" data-lg-stick-up-offset="2px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="rd-navbar-inner"> 
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="logo-default" src="images/logo-default-163x46.png" alt="" width="163" height="46"/><img class="logo-inverse" src="images/logo-inverse-163x46.png" alt="" width="163" height="46"/></a></div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="about-us.html">About Us</a>
                    </li>
                    <li><a href="tour-search.html">Tour Search</a>
                    </li>
                    <li><a href="#">Gallery</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="fullwidth-gallery-hover-title.html">Fullwidth Gallery Hover Title</a>
                        </li>
                        <li><a href="grid-gallery-hover-title.html">Grid Gallery Hover Title</a>
                        </li>
                        <li><a href="grid-gallery-inside-title.html">Grid Gallery Inside Title</a>
                        </li>
                        <li><a href="grid-gallery-outside-title.html">Grid Gallery Outside Title</a>
                        </li>
                        <li><a href="masonry-gallery-inside-title.html">Masonry Gallery Inside Title</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Blog</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="classic-blog.html">Classic Blog</a>
                        </li>
                        <li><a href="grid-blog.html">Grid Blog</a>
                        </li>
                        <li><a href="masonry-blog.html">Masonry Blog</a>
                        </li>
                        <li><a href="modern-blog.html">Modern Blog</a>
                        </li>
                        <li><a href="audio-post.html">Audio Post</a>
                        </li>
                        <li><a href="image-post.html">Image Post</a>
                        </li>
                        <li><a href="single-post.html">Single Post</a>
                        </li>
                        <li><a href="video-post.html">Video Post</a>
                        </li>
                      </ul>
                    </li>
                    <li class="active"><a href="#">Pages</a>
                      <!-- RD Navbar Megamenu-->
                      <ul class="rd-navbar-megamenu rd-navbar-megamenu-banner">
                        <li><img src="images/megamenu-banner-301x510.jpg" alt="" width="301" height="510"/>
                        </li>
                        <li>
                          <ul class="rd-megamenu-list">
                            <li><a href="404-page.html">404 Page</a></li>
                            <li><a href="503-page.html">503 Page</a></li>
                            <li><a href="team-member.html">Team Member</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                          </ul>
                        </li>
                        <li>
                          <ul class="rd-megamenu-list">
                            <li><a href="login-page.html">Login Page</a></li>
                            <li><a href="our-history.html">Our History</a></li>
                            <li><a href="registration-page.html">Registration Page</a></li>
                            <li><a href="search-results.html">Search Results</a></li>
                            <li><a href="under-construction.html">Under Construction</a></li>
                          </ul>
                        </li>
                        <li>
                          <ul class="rd-megamenu-list">
                            <li><a href="services.html">Services</a></li>
                            <li><a href="single-job.html">Single Job</a></li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="single-tour.html">Single Tour</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="rd-navbar-aside-right-inner">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <label class="form-label form-label" for="rd-navbar-search-form-input">Search...</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit mdi mdi-magnify"></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom" style="background: url(&quot;images/breadcrumbs-bg.jpg&quot;); background-size: cover;">
          <div class="container">
            <p class="breadcrumbs-custom-subtitle">Easy Search</p>
            <p class="heading-1 breadcrumbs-custom-title">Search Results</p>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Search Results</li>
            </ul>
          </div>
        </section>

      </header>
      <!--Search results-->
      <section class="section section-lg bg-default">
        <div class="container container-wide">
          <div class="row row-fix justify-content-center">
            <div class="col-lg-9 col-xxl-6">
              <form class="rd-search rd-mailform-inline rd-mailform-sm rd-mailform-inline-modern" action="search-results.html" method="GET">
                <div class="rd-mailform-inline-inner">
                  <div class="form-wrap">
                    <label class="form-label form-label" for="rd-navbar-search-form-input-1">Search...</label>
                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input-1" type="text" name="s" autocomplete="off">
                  </div>
                  <button class="rd-search-form-submit button button-secondary button-xs">search</button>
                </div>
              </form>
              <div class="rd-search-results"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <!-- Footer Extended-->
      <footer class="section novi-background bg-cover page-footer page-footer-extended text-center text-lg-left bg-gray-darker">
        <div class="rd-google-map-wrap">
          <div class="google-map-container rd-google-map__model" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[ { &quot;featureType&quot;: &quot;all&quot;, &quot;elementType&quot;: &quot;labels.text.fill&quot;, &quot;stylers&quot;: [ { &quot;saturation&quot;: 36 }, { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 40 } ] }, { &quot;featureType&quot;: &quot;all&quot;, &quot;elementType&quot;: &quot;labels.text.stroke&quot;, &quot;stylers&quot;: [ { &quot;visibility&quot;: &quot;on&quot; }, { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 16 } ] }, { &quot;featureType&quot;: &quot;all&quot;, &quot;elementType&quot;: &quot;labels.icon&quot;, &quot;stylers&quot;: [ { &quot;visibility&quot;: &quot;off&quot; } ] }, { &quot;featureType&quot;: &quot;administrative&quot;, &quot;elementType&quot;: &quot;geometry.fill&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 20 } ] }, { &quot;featureType&quot;: &quot;administrative&quot;, &quot;elementType&quot;: &quot;geometry.stroke&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 17 }, { &quot;weight&quot;: 1.2 } ] }, { &quot;featureType&quot;: &quot;landscape&quot;, &quot;elementType&quot;: &quot;geometry&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 20 } ] }, { &quot;featureType&quot;: &quot;poi&quot;, &quot;elementType&quot;: &quot;geometry&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 21 } ] }, { &quot;featureType&quot;: &quot;road.highway&quot;, &quot;elementType&quot;: &quot;geometry.fill&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 17 } ] }, { &quot;featureType&quot;: &quot;road.highway&quot;, &quot;elementType&quot;: &quot;geometry.stroke&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 29 }, { &quot;weight&quot;: 0.2 } ] }, { &quot;featureType&quot;: &quot;road.arterial&quot;, &quot;elementType&quot;: &quot;geometry&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 18 } ] }, { &quot;featureType&quot;: &quot;road.local&quot;, &quot;elementType&quot;: &quot;geometry&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 16 } ] }, { &quot;featureType&quot;: &quot;transit&quot;, &quot;elementType&quot;: &quot;geometry&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 19 } ] }, { &quot;featureType&quot;: &quot;water&quot;, &quot;elementType&quot;: &quot;geometry&quot;, &quot;stylers&quot;: [ { &quot;color&quot;: &quot;#000000&quot; }, { &quot;lightness&quot;: 17 } ] } ]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
              <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
            </ul>
          </div>
        </div>
        <div class="container container-wide">
          <div class="row row-fix offset-custom-4 justify-content-sm-center justify-content-lg-between justify-content-xl-end row-135">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <div class="contact-info-wrap">
                <h6>contact information</h6>
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-small" id="tabs-2">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#tabs-extended-2-1" data-toggle="tab">San Diego</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tabs-extended-2-2" data-toggle="tab">New York</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tabs-extended-2-3" data-toggle="tab">Chicago</a></li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-extended-2-1">
                      <ul class="list-xs list-darker">
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span>
                          <div><a href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></div>
                        </li>
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                          <ul class="list-comma">
                            <li><a href="tel:#">1-800-1234-567</a></li>
                            <li><a href="tel:#">1-800-6780-345</a></li>
                          </ul>
                        </li>
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span><a href="mailto:#">mail@demolink.org</a></li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="tabs-extended-2-2">
                      <ul class="list-xs list-darker">
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span><a href="#">2130 Fulton Street, New York, NY 94117-1080 USA</a></li>
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                          <ul class="list-comma">
                            <li><a href="tel:#">1-800-0987-654</a></li>
                            <li><a href="tel:#">1-800-0987-654</a></li>
                          </ul>
                        </li>
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span><a href="mailto:#">newyork@demolink.org</a></li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="tabs-extended-2-3">
                      <ul class="list-xs list-darker">
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span><a href="#">2130 Fulton Street, Chicago, IL 94117-1080 USA</a></li>
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                          <ul class="list-comma">
                            <li><a href="tel:#">1-800-6543-765</a></li>
                            <li><a href="tel:#">1-800-3434-876</a></li>
                          </ul>
                        </li>
                        <li class="box-inline"><span class="icon novi-icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span><a href="mailto:#">chicago@demolink.org</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <h6>Gallery</h6>
                <div class="instafeed text-center" data-lightgallery="group">
                  <div class="row row-narrow row-10">
                    <div class="col-sm-3 col-4">
                      <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="item" href="images/project-1-1200x800-original.jpg"><img src="images/project-1-570x380.jpg" alt="" width="570" height="380"/>
                          <!--img.instagram-image(src='images/_blank.png', alt='', data-images-standard_resolution-url='src')--></a>
                        <div class="caption"> 
                          <ul class="list-inline">
                            <li><span class="icon novi-icon mdi mdi-plus">  </span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-4">
                      <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="item" href="images/project-2-1200x800-original.jpg"><img src="images/project-2-570x380.jpg" alt="" width="570" height="380"/>
                          <!--img.instagram-image(src='images/_blank.png', alt='', data-images-standard_resolution-url='src')--></a>
                        <div class="caption"> 
                          <ul class="list-inline">
                            <li><span class="icon novi-icon mdi mdi-plus">  </span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-4">
                      <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="item" href="images/project-3-1200x800-original.jpg"><img src="images/project-3-570x380.jpg" alt="" width="570" height="380"/>
                          <!--img.instagram-image(src='images/_blank.png', alt='', data-images-standard_resolution-url='src')--></a>
                        <div class="caption"> 
                          <ul class="list-inline">
                            <li><span class="icon novi-icon mdi mdi-plus">  </span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-4">
                      <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="item" href="images/project-4-1200x800-original.jpg"><img src="images/project-4-570x380.jpg" alt="" width="570" height="380"/>
                          <!--img.instagram-image(src='images/_blank.png', alt='', data-images-standard_resolution-url='src')--></a>
                        <div class="caption"> 
                          <ul class="list-inline">
                            <li><span class="icon novi-icon mdi mdi-plus">  </span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-lg-5 col-xl-3">
              <h6>recent blog posts</h6>
              <div class="blog-inline-wrap">
                <!-- Blog Inline-->
                <article class="blog-inline">
                  <div class="blog-inline-title"><a href="single-post.html">Top 10 Hotels to Stay at: Exclusive Rating by Sealine Travel Experts</a></div>
                  <ul class="blog-inline-meta">
                    <li><a href="single-post.html"> 2 days ago</a></li>
                    <li>
                      by&nbsp;<a class="text-normal" href="single-post.html">Ronald Chen</a></li>
                  </ul>
                </article>
                <!-- Blog Inline-->
                <article class="blog-inline">
                  <div class="blog-inline-title"><a href="single-post.html">How to Plan Your Vacation in Advance and Why It’s Beneficial</a></div>
                  <ul class="blog-inline-meta">
                    <li><a href="single-post.html"> 2 days ago</a></li>
                    <li>
                      by&nbsp;<a class="text-normal" href="single-post.html">Ronald Chen</a></li>
                  </ul>
                </article>
                <!-- Blog Inline-->
                <article class="blog-inline">
                  <div class="blog-inline-title"><a href="single-post.html">Your Personal Guide to Best Places to Visit This Year</a></div>
                  <ul class="blog-inline-meta">
                    <li><a href="single-post.html"> 2 days ago</a></li>
                    <li>
                      by&nbsp;<a class="text-normal" href="single-post.html">Ronald Chen</a></li>
                  </ul>
                </article>
                <!-- Blog Inline-->
                <article class="blog-inline">
                  <div class="blog-inline-title"><a href="single-post.html">8 Travel Tips for the Upcoming Summer Season</a></div>
                  <ul class="blog-inline-meta">
                    <li><a href="single-post.html"> 2 days ago</a></li>
                    <li>
                      by&nbsp;<a class="text-normal" href="single-post.html">Ronald Chen</a></li>
                  </ul>
                </article>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="row row-fix flex-lg-row-reverse justify-content-sm-center align-items-lg-center row-135 justify-content-xl-start">
                <div class="col-md-10 col-lg-5 col-xl-5 col-xxl-5 text-center">
                  <ul class="group-xs group-middle social-icons-list">
                    <li><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-google" href="#"></a></li>
                    <li><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
                <div class="col-md-10 col-lg-7 col-xl-7 col-xxl-6">
                  <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved&nbsp;<a href="#">Terms of Use</a>&nbsp;and&nbsp;<a href="privacy-policy.html">Privacy Policy</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

@endsection
