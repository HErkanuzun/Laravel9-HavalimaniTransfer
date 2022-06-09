@extends('layouts.adminbase')
@section('title',"Location")
@section('page','Admin/category/create')
@section('content')

<form role="form" action="/admin/category/store" method="post">
    @csrf
    <div class="form-group">
      <label> Parent Category</label>

      <section class="form-control select2" name="parent_id" style="">
        <option value="0" selected="selected"> Main Category</option>
        @foreach ($data as $rs)
           <option value="{{rs->id}}"> {{\App\Http\Controllers\CategoryController::getParentsTree($rs, $rs-title)}} </option>
        @endforeach
      </section>
    </div>

    <div class="form-group">
      <label for="exampleInputTitle1">Title</label>
      <input type="Title" name="title" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp" placeholder="Title">
      <small id="emailHelp" class="form-text text-muted">Connot be empty</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Keywords</label>
      <input type="Keywords" name="keywords" class="form-control" id="exampleInputKeywords1" placeholder="Keywords">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Descripton</label>
        <input type="text" name="description" class="form-control" id="exampleInputDescription1" placeholder="Description">
      </div>
      <div>      
        <label>Status</label>
        <select class="form-control" name="status">
          <option selected="selected">False</option>
          <option>True</option>
        </select></div>


      <div class="form-group">
        <label for="exampleFormControlFile1">Img select</label>
        <input type="file" name="imgselector" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <button type="submit" class="btn btn-default">Save</button>


    </div>
  </form>


@endsection