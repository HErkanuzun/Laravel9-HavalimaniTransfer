@extends('layouts.frontbase')
@section('title','')
@include("home.header")
@section('content')

<section class="section section-lg bg-default">
    <div class="container container-bigger">
      <div class="row row-fix row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
        <div class="col-md-10 col-lg-6 col-xl-6">
          <h3>description</h3>
          <div class="divider divider-decorate"></div>
          <p class="heading-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p class="text-spacing-sm text-gray-darker">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit </p>
          <p class="text-spacing-sm text-gray-darker">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
          <ul class="list-marked text-gray-darker">
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
          </ul><a class="button button-secondary button-nina" href="#">apply for this position</a>
        </div>
        <div class="col-md-10 col-lg-6 col-xl-5">
          <div class="row row-30">
            <div class="col-sm-12"><img src="images/single-job-01-570x380.jpg" alt="" width="570" height="380">
            </div>
            <div class="col-sm-12"><img src="images/single-job-02-570x380.jpg" alt="" width="570" height="380">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection