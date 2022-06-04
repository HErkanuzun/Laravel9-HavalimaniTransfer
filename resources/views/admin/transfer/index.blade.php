@extends('layouts.adminbase')
@section('title',"Transfer")
@section('page','Admin/Transfer')
@section('content')


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Transfer Table</h6>
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-sm mb-0 me-3" href="http://127.0.0.1:8000/admin/transfer/create">Create Transfer</a>
          
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">keywords</th>
                    <th scope="col">description</th>
                    <th scope="col">image</th>
                    <th scope="col">category_id</th>
                    <th scope="col">detail</th>
                    <th scope="col">base_price</th>
                    <th scope="col">km_price</th>
                    <th scope="col">capasity</th>
                    <th scope="col">Actions</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($transfers as $item )
                    
                 
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <th scope="row">{{$item->title}}</th>
                    <th scope="row">{{$item->keywords }}</th>
                    <td>{{$item->description}}</td>
                    <td><a href="{{route("admin_image_index",['id'=>$item->id])}}" class="btn btn-primary">IMAGES</a></td>
                    <td>{{$item->category_id}}</td>
                    <td>{{$item->detail}}</td>
                    <td>{{$item->base_price}}</td>
                    <td>{{$item->km_price}}</td>
                    <td>{{$item->capasity}}</td>
                    <td>
                      
                      <a href="{{route('admin_transfer_edit',['id'=>$item->id])}}" class="btn btn-warning">Edit</a>
                      <a href="{{route('admin_transfer_show',['id'=>$item->id])}}" class="btn btn-success">Show</a>
                      <a href="{{route('admin_transfer_delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
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

    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

@endsection