@extends('layouts.adminbase')
@section('title',"Location")
@section('page','Admin/Location/create')
@section('content')

<form role="form" action="{{route('admin_image_store',['id'=>$id])}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="container">
      <div class="row-2">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Title</label>
              <input type="test" id="inputtitle6" name="title" class="form-control" aria-describedby="Title">
              <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                  Write Your Title.
                </span>
              </div>
            </div>
 
          </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" name="image" type="file" id="formFile">
          </div>
          <button type="submit" class="btn btn-default">Add to Image Table</button>
      </div>
    </div>
</form>


@endsection