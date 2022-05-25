@extends('layouts.adminbase')
@section('title',"Admin/category/create")
@section('page','Admin/category/create')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<select data-live-search="true" data-live-search-style="startsWith" class="selectpicker">
    <option value="4444">4444</option>
    <option value="Fedex">Fedex</option>
    <option value="Elite">Elite</option>
    <option value="Interp">Interp</option>
    <option value="Test">Test</option>
  </select>

  <select class="selectpicker">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Barbecue</option>
  </select>






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
@endsection