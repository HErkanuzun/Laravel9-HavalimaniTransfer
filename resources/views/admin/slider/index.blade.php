@extends('layouts.adminbase')
@section('title',"Images")
@section('page','Admin/Images')
@section('content')


<div class="row">
  <div class="col-14">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Image Table</h6>
        <li class="nav-item d-flex align-items-center">
          <a class="btn btn-sm mb-0 me-3" href="{{route('admin_image_create',['id'=>$id])}}">Create Image</a>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Transfer_id</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($images as $item )
                
             
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->transfer_id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->image}}</td>
                <td>  
                  <a href="{{route('admin_image_edit',['id'=>$item->id])}}" class="btn btn-warning">Edit</a>
                  <a href="{{route('admin_image_show',['id'=>$item->id])}}" class="btn btn-success">Show</a>
                  <a href="{{route('admin_image_delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection