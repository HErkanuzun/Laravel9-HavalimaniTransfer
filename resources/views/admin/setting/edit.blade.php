@extends('layouts.adminbase')
@section('title',"Dashboard")
@section('page','Dashboard')
@section('content')


<div class="container">

    <form role="form" action="{{ route('admin_setting_update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control"  value="{{ $data->title }}" name="title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Keywords</label>
          <input type="text" class="form-control"  value="{{ $data->keywords }}" name="keywords">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control"  value="{{ $data->description }}" name="description">
          </div>
    
         
    
          <div class="form-group">
            <label for="exampleInputEmail1">company</label>
            <input type="text" class="form-control" value="{{ $data->company }}" placeholder="company" name="company">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">adress</label>
            <input type="text" class="form-control" value="{{ $data->address }}"  placeholder="address" name="address">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">phone</label>
            <input type="number" class="form-control" value="{{ $data->phone }}"  placeholder="0" name="phone">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">fax</label>
            <input type="number" class="form-control" value="{{ $data->fax }}"  placeholder="0" name="fax">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="text" class="form-control" value="{{ $data->email }}"  placeholder="email" name="email">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">smtpserver</label>
            <input type="text" class="form-control" value="{{ $data->smtpserver }}"  placeholder="smtpserver" name="smtpserver">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">smtpemail</label>
            <input type="text" class="form-control" value="{{ $data->smtpemail }}"  placeholder="smtpemail" name="smtpemail">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">smtppassword</label>
            <input type="number" class="form-control" value="{{ $data->smtppassword }}"  placeholder="0" name="smtppassword">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">smtpport</label>
            <input type="number" class="form-control" value="{{ $data->smtpport }}"  placeholder="0" name="smtpport">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">facebook</label>
            <input type="text" class="form-control" value="{{ $data->facebook }}"  placeholder="0" name="facebook">
          </div>
    
          <div class="form-group">
            <label for="exampleInputEmail1">instagram</label>
            <input type="text" class="form-control" value="{{ $data->instagram }}"  placeholder="0" name="instagram">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">twitter</label>
            <input type="text" class="form-control" value="{{ $data->twitter }}"  placeholder="0" name="twitter">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">aboutus</label>
            <input type="text" class="form-control" value="{{ $data->instagram }}"  placeholder="0" name="aboutus">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">contact</label>
            <textarea class="form-control"  name="contact" id="contact" cols="30" rows="10">
    
            </textarea>       
         
            <script>
              ClassicEditor
                      .create( document.querySelector( '#contact' ) )
                      .then( editor => {
                              console.log( editor );
                      } )
                      .catch( error => {
                              console.error( error );
                      } );
      </script>
         
          </div>
    
         
          <div class="form-group">
            <label for="exampleInputEmail1">references</label>
            <input type="text" class="form-control" value="{{ $data->references }}"  placeholder="references" name="references">
          </div>
        
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
              <option>selected>{{ $data->status }}</option>
              <option>1</option>
              <option>2</option>
              
            </select>
          </div>
    
    
    
        
        <button type="submit" class="btn btn-primary">update</button>
      </form>

</div>

@endsection