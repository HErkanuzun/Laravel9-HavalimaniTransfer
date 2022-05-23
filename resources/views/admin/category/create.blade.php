@extends('layouts.adminbase')
@section('title',"Admin/category/create")
@section('page','Admin/category/create')
@section('content')

<form role="form" action="/admin/category/store" method="post">
    @csrf

    <div class="form-group">
      <label for="exampleInputTitle1">Title</label>
      <input type="Title" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp" placeholder="Title">
      <small id="emailHelp" class="form-text text-muted">Connot be empty</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Keywords</label>
      <input type="Keywords" class="form-control" id="exampleInputKeywords1" placeholder="Keywords">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Descripton</label>
        <input type="text" class="form-control" id="exampleInputDescription1" placeholder="Description">
      </div>
      <!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasicFoodComplex">Food complex</label>
  <div class="col-md-4">
    <select id="selectbasicFoodComplex" name="selectbasicFoodComplex" class="form-control">
      <option value="1">valid</option>
      <option value="2">invalid</option>
    </select>
  </div>
</div>

      <form role="form" action="{{route('admin_category_store')" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Img select</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </form>
    
    </div>
    <button type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3">Save</button>
  </form>


@endsection