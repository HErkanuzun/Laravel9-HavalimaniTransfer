<section class="section">
    <div class="swiper-form-wrap">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper">
                @foreach ($sliderdata as $rs)
                <div class="swiper-slide" data-slide-bg="{{Storage::url($rs->image)}}">
                    <div class="swiper-slide-caption">
                        <div class="container container-bigger swiper-main-section">
                            <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                    <h3>{{$rs->title}}</h3>
                                    <div class="divider divider-decorate"></div>
                                    <p class="text-spacing-sm">We offer a variety of destinations to travel to, ranging from exotic to some extreme ones. They include very popular countries and cities like Paris, Rio de Janeiro, Cairo and a lot of others.</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" data-slide-bg="{{Storage::url($rs->image)}}" alt="">
                    <div class="swiper-slide-caption">
                        <div class="container container-bigger swiper-main-section">
                            <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                    <h3>{{$rs->title}}</h3>
                                    <div class="divider divider-decorate"></div>
                                    <p class="text-spacing-sm">Our travel agency is ready to offer you an exciting vacation that is designed to fit your own needs and wishes. Whether it’s an exotic cruise or a trip to your favorite resort, you will surely have the best experience.</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
 
                <div class="swiper-slide" data-slide-bg="{{Storage::url($rs->image)}}">
                    <div class="swiper-slide-caption">
                        <div class="container container-bigger swiper-main-section">
                            <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                    <h3>{{$rs->title}}</h3>
                                    <div class="divider divider-decorate"></div>
                                    <p class="text-spacing-sm">Our team is ready to provide you with unique weekly travel insights that include photos, videos, and articles about untravelled tourist paths. We know everything about the places you’ve never been to!</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                                </div>
                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper controls-->
            <div class="swiper-pagination-wrap">
                <div class="container container-bigger">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-bigger form-request-wrap form-request-wrap-modern">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
                <div class="col-lg-6 col-xxl-5">
                    <div class="form-request form-request-modern bg-gray-lighter novi-background">
                        <h4>Find your Tour</h4>
                        <!-- RD Mailform-->
                        <form class="rd-mailform form-fix">
                            <div class="row row-20 row-fix">
                                <div class="col-sm-12">
                                    <label class="form-label-outside">From</label>
                                    <div class="form-wrap form-wrap-inline">
                                        <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                            <option value="1">New York</option>
                                            <option value="2">Lisbon</option>
                                            <option value="3">Stockholm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label-outside">To</label>
                                    <div class="form-wrap form-wrap-inline">
                                        <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                            <option value="1">Chicago</option>
                                            <option value="2">Madrid</option>
                                            <option value="3">Paris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <label class="form-label-outside">Depart Date</label>
                                    <div class="form-wrap form-wrap-validation">
                                        <!-- Select -->
                                        <input class="form-input" id="dateForm" name="date" type="text" data-time-picker="date">
                                        <label class="form-label" for="dateForm">Choose the date</label>
                                        <!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
                                        <!--  option(value="1") Choose the date-->
                                        <!--  option(value="2") Primary-->
                                        <!--  option(value="3") Middle-->
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <label class="form-label-outside">Duration</label>
                                    <div class="form-wrap form-wrap-validation">
                                        <!-- Select 2-->
                                        <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                            <option value="1">Any length</option>
                                            <option value="2">2 days</option>
                                            <option value="3">3 days</option>
                                            <option value="4">4 days</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label-outside">Adults</label>
                                    <div class="form-wrap form-wrap-modern">
                                        <input class="form-input input-append" id="form-element-stepper" type="number" min="0" max="300" value="2">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label-outside">Children</label>
                                    <div class="form-wrap form-wrap-modern">
                                        <input class="form-input input-append" id="form-element-stepper-1" type="number" min="0" max="300" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-wrap form-button">
                                <button class="button button-block button-secondary" type="submit">search flight</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
