@extends('layouts.frontbase')
@section('title','')
@include("home.header")
@section('content')

    <div class="page">
        <!-- Page Header-->
        <header class="section page-header breadcrumbs-custom-wrap bg-gradient bg-secondary-2 novi-background bg-cover">
            <!-- RD Navbar-->

            <!-- Breadcrumbs-->
            <section class="breadcrumbs-custom" style="background: url(&quot;images/breadcrumbs-bg.jpg&quot;); background-size: cover;">
                <div class="container">
                    <p class="breadcrumbs-custom-subtitle">Get in Touch with Us</p>
                    <p class="heading-1 breadcrumbs-custom-title">Contacts</p>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contacts</li>
                    </ul>
                </div>
            </section>

        </header>
        <!-- Contact info-->
        <section class="section section-lg bg-default text-center">
            <div class="container container-wide">
                <div class="row row-fix row-50 row-custom-bordered">
                    <div class="col-sm-6 col-lg-3">
                        <!-- Box minimal-->
                        <article class="box-simple">
                            <div class="box-simple-icon novi-icon mdi mdi-map-marker"></div>
                            <div class="snackbars" id="form-output-global"> </div>
                            <div class="container" style="border-radius: 20px; background-color:rgb(241, 255, 238); text-align:center;">
                                <h2>References</h2>
                             
                                <p>{{ $data }}</p>
                             
                                 </div>
                            <h1 style="color: rgb(22, 22, 82)">{!! $data !!}</h1>
                        </article>
                </div>
            </div>
        </section>

        <!-- Contact us-->
        <section class="section section-wrap bg-gray-lighter novi-background bg-cover">
            <div class="section-wrap-inner">
                <div class="container container-bigger">
                    <div class="row row-fix row-50">
                        <div class="col-lg-8 col-xl-7">
                            <div class="section-wrap-content section-lg">
                                <h3>Contact us</h3>
                                <hr class="divider divider-left divider-secondary">
                                <p class="big">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally.</p>
                                <!-- RD Mailform-->
                                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                    <div class="row row-fix row-20">
                                        <div class="col-md-6">
                                            <div class="form-wrap form-wrap-validation">
                                                <label class="form-label-outside" for="form-1-name">First name</label>
                                                <input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap form-wrap-validation">
                                                <label class="form-label-outside" for="form-1-last-name">Last name</label>
                                                <input class="form-input" id="form-1-last-name" type="text" name="last-name" data-constraints="@Required"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap form-wrap-validation">
                                                <label class="form-label-outside" for="form-1-email">E-mail</label>
                                                <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap form-wrap-validation">
                                                <label class="form-label-outside" for="form-1-phone">Phone</label>
                                                <input class="form-input" id="form-1-phone" type="text" name="phone" data-constraints="@Numeric @Required"/>
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
                </div>
                <div class="section-wrap-aside">
                    <!-- RD Google Map-->
                    <div class="google-map-container google-map-with-icon rd-google-map__model" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                        <div class="google-map"></div>
                        <ul class="google-map-markers">
                            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Global Mailform Output-->


@endsection