@extends('layouts.adminbase')
@section('title',"Transfer")
@section('page','Admin/transfer/create')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<form role="form" action="/admin/transfer/store" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select class="form-select" name="category_id" aria-label="Default select example">
      <option selected>Select a Types Of Vehicle</option>
      <option value="1">Vip </option>
      <option value="2">Günlük</option>
      <option value="3">İş</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputTitle1">Title</label>
    <input type="Title" name="title" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp" placeholder="Title">
    <small id="emailHelp" class="form-text text-muted">Cannot be empty</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keywords</label>
    <input type="Keywords" name="keywords" class="form-control" id="exampleInputKeywords12" placeholder="Keywords">
    <small id="emailHelp" class="form-text text-muted">Cannot be empty</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Descripton</label>
    <textarea class="summernote form-control" name="description" class="" id="exampleFormControlTextarea11" rows="3"></textarea>
    <small id="emailHelp" class="form-text text-muted">Cannot be empty</small>
  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlTextarea1"  class="form-label">Detail</label>
    <textarea class="summernote form-control" name="detail" class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">km_price</label>
    <input type="text" name="km_price" class="form-control" id="3exampleInputPricePerKilometre1" placeholder="Price Per Kilometre">
  </div>
  
  <div>
    <label for="exampleInputPassword1">Types Of Vehicles </label>
    <select class="form-select" name="car_detail" aria-label="Default select example">
      <option selected>Select a Types Of Vehicle</option>
      <option value="1">Limuzin</option>
      <option value="2">Vip Minibüs</option>
      <option value="3">Vip Otomobil</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Cannot be empty</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Capasity</label>
    <input type="text" name="capasity" class="form-control" id="exampleInputCapasity1" placeholder="Capasity">
    
  </div>
  
  
  
  <div class="container">
    <div class="row align-items-start">
      <div class="col">
        <label for="exampleInputPassword1">Base Price</label>
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">$</span>
          <input type="text" name="base_price" class="form-control" placeholder="Price" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
      </div>
      <div class="col">
        <label for="exampleInputPassword1">Price per Kilometer</label>
        <div class="input-group flex-nowrap">
          <span class="input-group-text"  id="addon-wrapping">$</span>
          <input type="text" name="km_price" class="form-control" placeholder="Price" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
      </div>
    </div>
  </div>
  
  <div>
    <label for="formFileLg" class="form-label">Large file input example</label>
    <input class="form-control form-control" name="image" id="formFileLg2" type="file">
    
  </div>
  
</div>
<button type="submit" class="btn btn-default">Save</button>
</form>

<script>
  $(document).ready(function() {
      $('.summernote').summernote();
  });
</script>
@endsection