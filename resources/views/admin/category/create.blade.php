@extends('layouts.adminbase')
@section('title',"Admin/category/create")
@section('page','Admin/category/create')
@section('content')

<form>
    <div class="form-group">
      <label for="exampleInputTitle1">Title</label>
      <input type="Title" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp" placeholder="Title">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Keywords</label>
      <input type="Keywords" class="form-control" id="exampleInputKeywords1" placeholder="Keywords">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Descripton</label>
        <input type="text" class="form-control" id="exampleInputDescription1" placeholder="Description">
      </div>

    <form>
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </form>
    
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection