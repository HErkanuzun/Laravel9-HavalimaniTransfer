@extends('layouts.frontbase')
@section('title','single PAGE')
@include("home.header")
@section('content')
<!-- Ronald Chen-->
<section class="section section-lg bg-default text-left">
  <div class="container container-bigger">
    <div class="row row-fix row-50 justify-content-xl-between">
      <div class="col-xl-4">
        <div class="row row-fix row-70 align-items-md-center">
          <div class="col-md-6 col-xl-12"><img src="images/ronald-chen-1-420x420.jpg" alt="" width="420" height="420"/>
          </div>
          <div class="col-md-6 col-xl-12 text-md-left">
            <h6>Get in Touch</h6>
            <!-- RD Mailform-->
            <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
              <div class="row row-20 row-fix">
                <div class="col-md-12">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-1-name">First name</label>
                    <input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-1-email">E-mail</label>
                    <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-1-message">Message</label>
                    <textarea class="form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 offset-custom-1">
                  <div class="form-button">
                    <button class="button button-secondary button-nina" type="submit">send message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xl-7">
        <div class="row row-fix row-30 row-xl-120">
          <div class="col-sm-12">
            <div class="heading-5">Tour Agent</div>
            <h3>ronald chen</h3>
            <div class="divider divider-decorate"></div>
            <p class="text-spacing-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <div class="row text-center row-lg row-30 row-xxs-center">
              <div class="cell-xxs-6 col-sm-4">
                <div class="progress-bar-circle" data-value="0.75" data-gradient="#ffa900, #ffa900" data-empty-fill="rgb(242,243,249)" data-size="140" data-thickness="6"><span class="radial">5</span></div>
                <div class="heading-5">Hotel Booking</div>
              </div>
              <div class="cell-xxs-6 col-sm-4">
                <div class="progress-bar-circle" data-value="0.50" data-gradient="#ffa900, #ffa900" data-empty-fill="rgb(242,243,249)" data-size="140" data-thickness="6"><span class="radial">5</span></div>
                <div class="heading-5">Management</div>
              </div>
              <div class="cell-xxs-6 col-sm-4">
                <div class="progress-bar-circle" data-value="0.25" data-gradient="#ffa900, #ffa900" data-empty-fill="rgb(242,243,249)" data-size="140" data-thickness="6"><span class="radial">5</span></div>
                <div class="heading-5">Communication</div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="row row-70">
              <div class="col-md-6">
                <h6>skills</h6>
                <p>Financial and budget management, planning, <br class="d-none d-xxl-block"> tour organization, communication
                </p>
              </div>
              <div class="col-md-6">
                <h6>awards</h6>
                <ul class="list list-xxs text-spacing-sm">
                  <li>2017 — The Best Tour Manager</li>
                  <li>2016 — Employee of the Year</li>
                  <li>2015 — Leading Tourism Expert</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>certificates</h6>
                <ul class="list list-xxs text-spacing-sm">
                  <li>2017 — International Tourism Management</li>
                  <li>2016 — Hotel Management</li>
                  <li>2015 — Applied Tourism Certificate</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>contact information</h6>
                <ul class="list-xs">
                  <li class="box-inline box-inline-gray"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span>
                    <div><a href="#">2130 Fulton Street, San Diego, CA<br>94117-1080 USA</a></div>
                  </li>
                  <li class="box-inline box-inline-gray"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                    <ul class="list-comma">
                      <li><a href="tel:#">1-800-1234-567</a></li>
                    </ul>
                  </li>
                  <li>
                    <ul class="inline-list-xs">
                      <li><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google" href="#"></a></li>
                      <li><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Projects-->
<section class="section section-lg text-center bg-gray-lighter novi-background bg-cover">
  <div class="container container-wide">
    <div class="row row-fix row-50 justify-content-md-center">
      <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h3>Hot Deals</h3>
        <div class="divider divider-decorate"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
      </div>
    </div>
    <div class="row row-50">
      <div class="col-md-6 col-xl-4">
        <article class="event-default-wrap">
          <div class="event-default">
            <figure class="event-default-image"><img src="images/landing-private-airlines-01-570x370.jpg" alt="" width="570" height="370"/>
            </figure>
            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
          </div>
          <div class="event-default-inner">
            <h5><a class="event-default-title" href="single-tour.html">France, Paris</a></h5><span class="heading-5">from $280</span>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-4">
        <article class="event-default-wrap">
          <div class="event-default">
            <figure class="event-default-image"><img src="images/landing-private-airlines-02-570x370.jpg" alt="" width="570" height="370"/>
            </figure>
            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
          </div>
          <div class="event-default-inner">
            <h5><a class="event-default-title" href="single-tour.html">USA, Boston</a></h5><span class="heading-5">from $480</span>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-4">
        <article class="event-default-wrap">
          <div class="event-default">
            <figure class="event-default-image"><img src="images/landing-private-airlines-03-570x370.jpg" alt="" width="570" height="370"/>
            </figure>
            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
          </div>
          <div class="event-default-inner">
            <h5><a class="event-default-title" href="single-tour.html">Italy, Venice</a></h5><span class="heading-5">from $350</span>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-4">
        <article class="event-default-wrap">
          <div class="event-default">
            <figure class="event-default-image"><img src="images/landing-private-airlines-04-570x370.jpg" alt="" width="570" height="370"/>
            </figure>
            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
          </div>
          <div class="event-default-inner">
            <h5><a class="event-default-title" href="single-tour.html">Spain, Benidorm</a></h5><span class="heading-5">from $350</span>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-4">
        <article class="event-default-wrap">
          <div class="event-default">
            <figure class="event-default-image"><img src="images/landing-private-airlines-05-570x370.jpg" alt="" width="570" height="370"/>
            </figure>
            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
          </div>
          <div class="event-default-inner">
            <h5><a class="event-default-title" href="single-tour.html">Egypt,  Sharm El Sheikh</a></h5><span class="heading-5">from $520</span>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-4">
        <article class="event-default-wrap">
          <div class="event-default">
            <figure class="event-default-image"><img src="images/landing-private-airlines-06-570x370.jpg" alt="" width="570" height="370"/>
            </figure>
            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
          </div>
          <div class="event-default-inner">
            <h5><a class="event-default-title" href="single-tour.html">UK, London</a></h5><span class="heading-5">from $600</span>
          </div>
        </article>
      </div>
    </div>
  </div><a class="button button-secondary button-nina" href="#">view all projects</a>
</section>

<!-- Testimonials-->
<section class="section section-lg text-center bg-default novi-background bg-cover">
  <div class="container container-wide">
    <div class="row row-fix row-50 justify-content-md-center">
      <div class="col-md-11 col-lg-10 col-xxl-7 cell-xxl-6">
        <h3>testimonials</h3>
        <div class="divider divider-decorate"></div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-layout-2" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
          <article class="quote-vertical"><img class="quote-vertical-image" src="images/quote-user-1-210x210.jpg" alt="" width="210" height="210"/>
            <div class="quote-vertical-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="quote-vertical-meta">
              <p class="quote-vertical-cite">Ann McMillan</p>
              <p class="quote-vertical-small">Regular Customer</p>
            </div>
          </article>
          <article class="quote-vertical"><img class="quote-vertical-image" src="images/quote-user-2-210x210.jpg" alt="" width="210" height="210"/>
            <div class="quote-vertical-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="quote-vertical-meta">
              <p class="quote-vertical-cite">Debra Ortega</p>
              <p class="quote-vertical-small">Regular Customer</p>
            </div>
          </article>
          <article class="quote-vertical"><img class="quote-vertical-image" src="images/quote-user-3-210x210.jpg" alt="" width="210" height="210"/>
            <div class="quote-vertical-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="quote-vertical-meta">
              <p class="quote-vertical-cite">Samantha Smith</p>
              <p class="quote-vertical-small">Regular Customer</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Gradient-->
<section class="section section-md text-center text-md-left bg-gray-700 novi-background bg-cover">
  <div class="container container-wide">
    <div class="row row-fix row-50 justify-content-sm-center">
      <div class="col-xxl-8">
        <div class="box-cta box-cta-inline">
          <div class="box-cta-inner">
            <h3 class="box-cta-title">looking for a great tour?</h3>
            <p>Our travel agency can provide with a wide variety of tours to fit your taste.</p>
          </div>
          <div class="box-cta-inner"><a class="button button-secondary button-nina" href="about-us.html">learn more</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

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
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"> </div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></body>

@endsection