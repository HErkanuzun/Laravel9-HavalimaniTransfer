@extends('layouts.adminbase')
@section('title',"Setting")
@section('page','Admin/Setting')
@section('content')


<div class="row">
    <div class="col-md-6"><a href="{{ route('admin_setting_edit',['id'=>$data->id])}}">edit settings</a></div>
</div>

<div class="row"> <h3 class="box-title mb-0">{{ $data->title }}</h3></div>
<div class="table-responsive">
    <table class="table no-wrap">
        <thead>
            <tr>
                <th class="border-top-0">#</th><td>{{ $data->id }}</td></tr>
                
                <tr>  <th class="border-top-0">keywords</th><td>{{ $data->keywords }}</td></tr>
                <tr> <th class="border-top-0">description</th><td>{{ $data->description }}</td></tr>
                <tr> <th class="border-top-0">company</th><td>{{ $data->company }}</td></tr>
                <tr><th class="border-top-0">adress</th><td>{{ $data->address }}</td></tr>

                <tr> <th class="border-top-0">phone</th><td>{{ $data->phone }}</td></tr>
                <tr> <th class="border-top-0">fax</th><td>{{ $data->fax }}</td></tr>
                <tr> <th class="border-top-0">email</th><td>{{ $data->email }}</td></tr>
                <tr> <th class="border-top-0">smtpserver</th><td>{{ $data->smtpserver }}</td></tr>
                <tr> <th class="border-top-0">smtpmail</th><td>{{ $data->smtpemail }}</td></tr>
                <tr> <th class="border-top-0">smtppassword</th><td>{{ $data->smtppassword }}</td></tr>
                <tr> <th class="border-top-0">smtpport</th><td>{{ $data->smtpport }}</td></tr>
                <tr> <th class="border-top-0">facebook</th><td>{{ $data->facebook }}</td></tr>
                <tr> <th class="border-top-0">instagram</th><td>{{ $data->instagram }}</td></tr>
                <tr> <th class="border-top-0">twitter</th><td>{{ $data->twitter }}</td></tr>
                <tr> <th class="border-top-0">abaout us</th><td>{{ $data->aboutus }}</td></tr>
                <tr> <th class="border-top-0">contact</th><td>{{ $data->contact }}</td></tr>
                <tr> <th class="border-top-0">referances</th><td>{{ $data->references }}</td></tr>
                <tr> <th class="border-top-0">status</th><td>{{ $data->status }}</td></tr>



                

            
        </thead>
       
    </table>
</div>




@endsection