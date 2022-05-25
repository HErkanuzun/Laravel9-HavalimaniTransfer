@extends('layouts.frontbase')
@section('title','')
@include("home.header")
@include("home.slider")
@section('content')
    <section class="section section-variant-1 bg-default novi-background bg-cover">
        <div class="container container-wide">
            <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
                <div class="col-xl-8">
                    <div class="parallax-text-wrap">
                        <h3>Our Best Tours</h3><span class="parallax-text">Hot tours</span>
                    </div>
                    <hr class="divider divider-decorate">
                </div>
                <div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="#">view all tours</a></div>
            </div>
            <div class="row row-50">
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{asset('assets')}}/images/landing-private-airlines-01-570x370.jpg" alt="" width="570" height="370"/>
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">France, Paris</a></h5><span class="heading-5">from $280</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{asset('assets')}}/images/landing-private-airlines-02-570x370.jpg" alt="" width="570" height="370"/>
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">USA, Boston</a></h5><span class="heading-5">from $480</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{asset('assets')}}/images/landing-private-airlines-03-570x370.jpg" alt="" width="570" height="370"/>
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">$350</span>
                        </div>
                    </article>
                            <h5><a class="event-default-title" href="#">Italy, Venice</a></h5><span class="heading-5">from
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{asset('assets')}}/images/landing-private-airlines-04-570x370.jpg" alt="" width="570" height="370"/>
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">Spain, Benidorm</a></h5><span class="heading-5">from $350</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{asset('assets')}}/images/landing-private-airlines-05-570x370.jpg" alt="" width="570" height="370"/>
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">Egypt,  Sharm El Sheikh</a></h5><span class="heading-5">from $520</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{asset('assets')}}/images/landing-private-airlines-06-570x370.jpg" alt="" width="570" height="370"/>
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">UK, London</a></h5><span class="heading-5">from $600</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- our advantages-->
    <section class="section section-lg bg-gray-lighter novi-background bg-cover text-center">
        <div class="container container-wide">
            <h3>our services</h3>
            <div class="divider divider-decorate"></div>
            <div class="row row-50 justify-content-sm-center text-left">
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-airplane"></div>
                        <p class="big box-minimal-title">Air Tickets</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">At our travel agency, you can book air tickets to any world destination. We also provide online ticket booking via our website in just a couple of steps.</div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-map"></div>
                        <p class="big box-minimal-title">Voyages & Cruises</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">Besides regular tours and excursions, we also offer a variety of cruises & sea voyages for different customers looking for awesome experiences.</div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-city"></div>
                        <p class="big box-minimal-title">Hotel Bookings</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">We offer a wide selection of hotel ranging from 5-star ones to small properties located worldwide so that you could book a hotel you like.</div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-beach"></div>
                        <p class="big box-minimal-title">Tailored Summer Tours</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">Our agency provides varied tours including tailored summer tours for clients who are searching for an exclusive and memorable vacation.</div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips & tricks-->
    <section class="section section-lg novi-background bg-cover bg-default text-center">
        <div class="container-wide">
            <div class="row row-50">
                <div class="col-sm-12">
                    <h3>Latest News</h3>
                    <div class="divider divider-decorate"></div>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-team owl-carousel-inset" data-items="1" data-md-items="2" data-xl-items="3" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots="true" data-autoplay="true">
                        <article class="post-blog"><a class="post-blog-image" href="#"><img src="{{asset('assets')}}/images/landing-private-airlines-7-570x415.jpg" alt="" width="570" height="415"/></a>
                            <div class="post-blog-caption">
                                <div class="post-blog-caption-header">
                                    <ul class="post-blog-tags">
                                        <li><a class="button-tags" href="#">Hotels</a></li>
                                    </ul>
                                    <ul class="post-blog-meta">
                                        <li><span>by</span>&nbsp;<a href="#">Ronald Chen</a></li>
                                    </ul>
                                </div>
                                <div class="post-blog-caption-body">
                                    <h5><a class="post-blog-title" href="#">Top 10 Hotels to Stay At: Exclusive Rating by Sealine Travel Experts</a></h5>
                                </div>
                                <div class="post-blog-caption-footer">
                                    <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="post-blog"><a class="post-blog-image" href="#"><img src="{{asset('assets')}}/images/landing-private-airlines-8-570x415.jpg" alt="" width="570" height="415"/></a>
                            <div class="post-blog-caption">
                                <div class="post-blog-caption-header">
                                    <ul class="post-blog-tags">
                                        <li><a class="button-tags" href="#">Tips</a></li>
                                    </ul>
                                    <ul class="post-blog-meta">
                                        <li><span>by</span>&nbsp;<a href="#">Ronald Chen</a></li>
                                    </ul>
                                </div>
                                <div class="post-blog-caption-body">
                                    <h5><a class="post-blog-title" href="#">How to Plan Your Vacation in Advance and Why It’s Beneficial</a></h5>
                                </div>
                                <div class="post-blog-caption-footer">
                                    <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="post-blog"><a class="post-blog-image" href="#"><img src="{{asset('assets')}}/images/landing-private-airlines-9-570x415.jpg" alt="" width="570" height="415"/></a>
                            <div class="post-blog-caption">
                                <div class="post-blog-caption-header">
                                    <ul class="post-blog-tags">
                                        <li><a class="button-tags" href="#">Traveling</a></li>
                                    </ul>
                                    <ul class="post-blog-meta">
                                        <li><span>by</span>&nbsp;<a href="#">Ronald Chen</a></li>
                                    </ul>
                                </div>
                                <div class="post-blog-caption-body">
                                    <h5><a class="post-blog-title" href="#">Your Personal Guide to 5 Best Places to Visit on Earth</a></h5>
                                </div>
                                <div class="post-blog-caption-footer">
                                    <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12"><a class="button button-secondary button-nina button-offset-lg" href="#">view all blog posts</a></div>
            </div>
        </div>
    </section>

    <section class="section section-lg text-center bg-gray-lighter novi-background bg-cover">
        <div class="container container-bigger">
            <h3>testimonials</h3>
            <div class="divider divider-decorate"></div>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-layout-1" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
                <article class="quote-boxed">
                    <div class="quote-boxed-aside"><img class="quote-boxed-image" src="{{asset('assets')}}/images/quote-user-1-210x210.jpg" alt="" width="210" height="210"/>
                    </div>
                    <div class="quote-boxed-main">
                        <div class="quote-boxed-text">
                            <p>I wanted to thank you very much for planning the trip to France for my boyfriend and me. It was amazing and exceeded my expectations! We had a wonderful time and were very pleased with the accommodations in Paris and Bayeux. Our private/small tour guides were fantastic! I appreciate all the effort to get us to the Eiffel Tower finally. </p>
                        </div>
                        <div class="quote-boxed-meta">
                            <p class="quote-boxed-cite">Ann McMillan</p>
                            <p class="quote-boxed-small">Regular Customer</p>
                        </div>
                    </div>
                </article>
                <article class="quote-boxed">
                    <div class="quote-boxed-aside"><img class="quote-boxed-image" src="{{asset('assets')}}/images/quote-user-2-210x210.jpg" alt="" width="210" height="210"/>
                    </div>
                    <div class="quote-boxed-main">
                        <div class="quote-boxed-text">
                            <p>I had a marvelous time in our travels to Madagascar, Zimbabwe and Botswana, I had just wonderful experiences.I loved the location of the Gorges Camp as I felt like it was only the time we got to see real and rural Africans and how they truly lived. The service was amazing and everyone was very attentive!</p>
                        </div>
                        <div class="quote-boxed-meta">
                            <p class="quote-boxed-cite">Debra Ortega</p>
                            <p class="quote-boxed-small">Regular Customer</p>
                        </div>
                    </div>
                </article>
                <article class="quote-boxed">
                    <div class="quote-boxed-aside"><img class="quote-boxed-image" src="{{asset('assets')}}/images/quote-user-3-210x210.jpg" alt="" width="210" height="210"/>
                    </div>
                    <div class="quote-boxed-main">
                        <div class="quote-boxed-text">
                            <p>Just wanted to say many, many thanks for helping me set up an amazing Costa Rican adventure! My nephew and I had a blast! All of the accommodations were perfect as were the activities that we did (canopy, coffee tour, hikes, fishing, and massages!) We have such fond memories and can't thank you enough!</p>
                        </div>
                        <div class="quote-boxed-meta">
                            <p class="quote-boxed-cite">Samantha Smith</p>
                            <p class="quote-boxed-small">Regular Customer</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section section-md text-center text-md-left bg-gray-700 novi-background bg-cover">
        <div class="container container-wide">
            <div class="row row-fix row-50 justify-content-sm-center">
                <div class="col-xxl-8">
                    <div class="box-cta box-cta-inline">
                        <div class="box-cta-inner">
                            <h3 class="box-cta-title">Buy a tour without leaving your home</h3>
                            <p>Using our website, you can book any tour just in a couple of clicks.</p>
                        </div>
                        <div class="box-cta-inner"><a class="button button-secondary button-nina" href="#">Book Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
