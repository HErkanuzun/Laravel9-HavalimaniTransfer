@extends('layouts.adminbase')
@section('title',"Location")
@section('page','Edit Location $edit->title')
@section('content')

<form role="form" action="{{route('admin_location_update',['id'=>$edit->id])}}" method="post">
  @csrf
    <div class="container">
      <div class="row-2">
        <select class="form-select" aria-label="Default select example" value="{{$edit->type}}" name="type">
          <option selected >{{$edit->type}}</option>
          <option value="Airport">Airport</option>
          <option value="City">City</option>
        </select>

          <div class="col ">
            <label for="exampleDataList" class="form-label" >Add Your Location name</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" value="{{$edit->name}}" name="name">
           <datalist id="datalistOptions">
              <option value="Turkey, Istanbul">
              <option value="Turkey, Ankara">
              <option value="USA, New York">
              <option value="France, Paris">
              <option value="Italy, Rome">
           </div>
          <div class="col">
            <label for="exampleDataList" class="form-label" >Add Your Lat</label>
            <input class="form-control" list="datalistOptions1" id="exampleDataList1" name="lat" value="{{$edit->lat}}" >
            <datalist id="datalistOptions1">
              <option value="Istanbul,41.0082">
              <option value="Ankara,39.9334">
              <option value="New York, 40.730610">
              <option value="Paris, 48.864716">
              <option value="It, Rome, 41.89193">
          </div>
          <div class="col ">
            <label for="exampleDataList2" class="form-label" >Add Your Long</label>
            <input class="form-control" list="datalistOptions2" id="exampleDataList2" name="long" value="{{$edit->long}}">
            <datalist id="datalistOptions2">
              <option value="Istanbul, 28.9784">
              <option value="Ankara, 32.8597">
              <option value="New York, -73.935242">
              <option value="Paris, 2.349014">
              <option value="It, Rome, 12.51133">
          </div>
          <div class="col-4">
            <label for="exampleDataList" class="form-label" >Status</label>
            <div class="form-check form-check-inline" >
              <input class="form-check-input" type="radio"  name="status" id="inlineRadio1" value="{{$edit->status}}">
              <label class="form-check-label" for="inlineRadio1">Unavailable</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio"  name="status" id="inlineRadio2" value="{{$edit->status}}">
              <label class="form-check-label" for="inlineRadio2">Available</label>
            </div>

            <div class="col-1">
              <button type="submit" class="btn btn-default">Save</button>
            </div>
          </div>
      </div>
    </div>
</form>


@endsection