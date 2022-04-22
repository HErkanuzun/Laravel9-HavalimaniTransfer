@extends('layouts.adminbase')
@section('title',"Location")
@section('page','Admin/Location/create')
@section('content')

<form role="form" action="/admin/location/store" method="post">
  @csrf
    <div class="container">
      <div class="row-2">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Title</label>
            </div>
            <div class="col-auto">
              <input type="test" id="inputtitle6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Write Your Title.
              </span>
            </div>
          </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <button type="submit" class="btn btn-default">Save</button>
      </div>
    </div>
</form>


@endsection