@extends('layouts.adminbase')
@section('title',"Location Table")
@section('page','Admin Location')
@section('content')

<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Location Table</h6>
        <li class="nav-item d-flex align-items-center">
          <a class="btn btn-sm mb-0 me-3" href="http://127.0.0.1:8000/admin/location/create">Create Location</a>
      
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">type</th>
                <th scope="col">name</th>
                <th scope="col">lat</th>
                <th scope="col">long</th>
                <th scope="col">status</th>
                <th scope="col">Actions</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($locations as $item )
                
             
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->type}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->lat}}</td>
                <td>{{$item->long}}</td>
                <td>{{$item->status}}</td>
                <td>
                  
                  <a href="{{route('admin_category_edit',['id'=>$item->id])}}" class="btn btn-warning">Edit</a>
                  <a href="{{route('admin_category_show',['id'=>$item->id])}}" class="btn btn-success">Show</a>
                  <a href="{{route('admin_category_delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
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