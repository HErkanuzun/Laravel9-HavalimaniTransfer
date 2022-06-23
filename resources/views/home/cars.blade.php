@extends('layouts.frontbase')
@section('title','')
@include("home.header")
@section('content')

<!-- Single post-->
<section class="section section-lg bg-default">
    <div class="container container-wide">
      <div class="row justify-content-sm-center">
        <div class="col-lg-10 col-xl-8 col-xxl-6 sections-collapsable single-post-wrap">
          <article class="post-blog-article">
            <p class="post-blog-article-title">How to Plan Your Vacation in Advance and <br class="d-none d-lg-block"> Why It’s Beneficial </p>
            <ul class="post-blog-article-meta group-xl">
              <li>
                <div class="box-inline"><span class="icon novi-icon icon-md icon-primary mdi mdi-account"></span>by
                  <div><a href="#">Ronald Chen</a></div>
                </div>
              </li>
              <li>
                <div class="box-inline"><span class="icon novi-icon icon-md icon-primary mdi mdi-calendar-clock"></span>
                  <time datetime="2018">Feb, 27 2018 at 5:47 pm</time>
                </div>
              </li>
            </ul>
            <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p><img src="images/blog-03-870x580.jpg" alt="" width="870" height="580"/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <article class="quote-primary">
              <svg class="quote-primary-mark" version="1.1" xmlns="{{Storage::url($rs->image)}}+" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">--1`   q\WE32qsdxc
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                            L7.539,10.206z"></path>
              </svg>
              <div class="quote-primary-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
              </div>
              <p class="quote-primary-meta"><span>by</span><span class="cite">Ronald Chen</span></p>
            </article>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="group-md group-middle button-group"><a class="button button-icon-alternate button-icon-left button-sm button-facebook" href="#"><span class="icon novi-icon mdi mdi-facebook"></span>Facebook</a><a class="button button-icon-alternate button-icon-left button-sm button-twitter" href="#"><span class="icon novi-icon mdi mdi-twitter"></span>Twitter</a><a class="button button-icon-alternate button-icon-left button-sm button-google" href="#"><span class="icon novi-icon mdi mdi-google"></span>Google</a></div>
          </article>
          <div class="section-md">
            <p class="h3-alternate">Comments</p>
            <div class="comment-group">
              <!-- Comment-->
              <article class="comment">
                <div class="comment-avatar"><img src="images/user-1-80x80.jpg" alt="" width="80" height="80"/>
                </div>
                <div class="comment-body">
                  <div class="comment-header">
                    <p class="comment-title">Catherine Payne</p>
                    <time class="comment-time" datetime="2018">2 days ago</time>
                  </div>
                  <div class="comment-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                  <div class="comment-footer"><a class="comment-link-reply" href="#">Reply</a></div>
                </div>
              </article>
              <div class="comment-group"> 
                <!-- Comment-->
                <article class="comment">
                  <div class="comment-avatar"><img src="images/user-2-80x80.jpg" alt="" width="80" height="80"/>
                  </div>
                  <div class="comment-body">
                    <div class="comment-header">
                      <p class="comment-title">Ronald Chen</p>
                      <time class="comment-time" datetime="2018">2 days ago</time><span class="comment-reply">Catherine Payne</span>
                    </div>
                    <div class="comment-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <div class="comment-footer"><a class="comment-link-reply" href="#">Reply</a></div>
                  </div>
                </article>
              </div>
              <!-- Comment-->
              <article class="comment">
                <div class="comment-avatar"><img src="images/user-3-80x80.jpg" alt="" width="80" height="80"/>
                </div>
                <div class="comment-body">
                  <div class="comment-header">
                    <p class="comment-title">Philip Bowman</p>
                    <time class="comment-time" datetime="2018">2 days ago</time>
                  </div>
                  <div class="comment-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                  <div class="comment-footer"><a class="comment-link-reply" href="#">Reply</a></div>
                </div>
              </article>
            </div>
          </div>
          <div class="section-lg">
            <p class="h3-alternate">Send a Comment</p>
            <!-- RD Mailform-->
            <form class="rd-mailform form-fix">
              <div class="row row-fix row-20">
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-comment-name">First name</label>
                    <input class="form-input" id="form-comment-name" type="text" name="name" data-constraints="@Required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-comment-last-name">Last name</label>
                    <input class="form-input" id="form-comment-last-name" type="text" name="last-name" data-constraints="@Required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-comment-email">E-mail</label>
                    <input class="form-input" id="form-comment-email" type="email" name="email" data-constraints="@Email @Required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-comment-phone">Phone</label>
                    <input class="form-input" id="form-comment-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-comment-message">Message</label>
                    <textarea class="form-input" id="form-comment-message" name="message" data-constraints="@Required"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 offset-custom-1">
                  <div class="form-button">
                    <button class="button button-secondary button-nina" type="submit">send comment</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="section-sm">
            <p class="h3-alternate">Recent Posts</p>
            <div class="row row-fix row-30 row-xl-50">
              <div class="col-sm-10 col-md-6 post-light-wrap">
                <article class="post-light">
                  <div class="unit flex-row">
                    <div class="unit-left"><a href="single-post.html"><img src="images/post-light-1-120x80.jpg" alt="" width="120" height="80"/></a></div>
                    <div class="unit-body">
                      <p class="post-light-title"><a href="single-post.html">Top 10 Hotels to Stay at: Exclusive Rating</a></p>
                      <time class="post-light-time" datetime="2018">Feb 27, 2018 at 5:47 pm</time>
                    </div>
                  </div>
                </article>
                <article class="post-light">
                  <div class="unit flex-row">
                    <div class="unit-left"><a href="single-post.html"><img src="images/post-light-3-120x80.jpg" alt="" width="120" height="80"/></a></div>
                    <div class="unit-body">
                      <p class="post-light-title"><a href="single-post.html">Your Personal Guide to Best Places to Visit This Year</a></p>
                      <time class="post-light-time" datetime="2018">Feb 27, 2018 at 5:47 pm</time>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-10 col-md-6 post-light-wrap">
                <article class="post-light">
                  <div class="unit flex-row">
                    <div class="unit-left"><a href="single-post.html"><img src="images/post-light-2-120x80.jpg" alt="" width="120" height="80"/></a></div>
                    <div class="unit-body">
                      <p class="post-light-title"><a href="single-post.html">How to Plan Your Vacation in Advance and Why It’s Beneficial</a></p>
                      <time class="post-light-time" datetime="2018">Feb 27, 2018 at 5:47 pm</time>
                    </div>
                  </div>
                </article>
                <article class="post-light">
                  <div class="unit flex-row">
                    <div class="unit-left"><a href="single-post.html"><img src="images/post-light-4-120x80.jpg" alt="" width="120" height="80"/></a></div>
                    <div class="unit-body">
                      <p class="post-light-title"><a href="single-post.html">8 Travel Tips for the Summer</a></p>
                      <time class="post-light-time" datetime="2018">Feb 27, 2018 at 5:47 pm</time>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NewsLetter-->
  <section class="section section-lg bg-gray-lighter novi-background bg-cover">
    <div class="container">
      <div class="row row-fix row-50 justify-content-md-center">
        <div class="col-md-9 col-lg-7 col-xl-6">
          <h3 class="text-center">NewsLetter</h3>
          <p>Keep up with our always upcoming product features and technologies. <br> Enter your e-mail and subscribe to our newsletter.</p>
          <!-- RD Mailform: Subscribe-->
          <form class="rd-mailform rd-mailform-inline rd-mailform-sm rd-mailform-inline-modern" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
            <div class="rd-mailform-inline-inner">
              <div class="form-wrap">
                <input class="form-input" type="email" name="email" data-constraints="@Email @Required" id="subscribe-form-email-1"/>
                <label class="form-label" for="subscribe-form-email-1">Enter your e-mail</label>
              </div>
              <button class="button form-button button-sm button-secondary button-nina" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


@endsection