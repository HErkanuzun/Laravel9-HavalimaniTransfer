@extends('layouts.adminbase')
@section('title',"Edit")
@section('page',"Edit Category $edit->title ")
@section('content')

<form role="form" action="{{route('admin_category_update',['id'=>$edit->id])}}" method="post">
    @csrf

    <div class="form-group">
      <label for="exampleInputTitle1">Title</label>
      <input type="Title" name="title" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp" value="{{$edit->title}}" placeholder="Title">
      <small id="emailHelp" class="form-text text-muted">Connot be empty</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Keywords</label>
      <input type="Keywords" name="keywords" class="form-control" id="exampleInputKeywords1" value="{{$edit->keywords}}" placeholder="Keywords">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputDescription1" value="{{$edit->description}}" placeholder="Description">
      </div>

        <div class="form-group">
			<label for="exampleFormControlSelect1">Status</label>
				<select class="form-control form-control-lg" name="status">
					<option value="{{$edit->status}}" >{{$edit->status==1?"True":"False"}}</option>
					<option value="1">True</option>
					<option value="2">False</option>
				</select>
		</div>


      <div class="form-group">
        <label for="exampleFormControlFile1">Img select</label>
        <input type="file" name="imgselector" class="form-control-file" value="{{$edit->image}}" id="exampleFormControlFile1">
      </div>
      <button type="submit" class="btn btn-default">Save</button>


    </div>
  </form>




@endsection