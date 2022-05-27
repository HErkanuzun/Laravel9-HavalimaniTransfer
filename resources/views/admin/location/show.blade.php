@extends('layouts.adminbase')
@section('title',"Dashboard")
@section('page','Dashboard')
@section('content')


<div class="input-group mb-3">
    <div class="input-group-text">
      <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input" />
    </div>
    <input type="text" class="form-control" aria-label="Text input with checkbox" />
  </div>
  
  <div class="input-group">
    <div class="input-group-text">
      <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input" />
    </div>
    <input type="text" class="form-control" aria-label="Text input with radio button" />
  </div>    
@endsection