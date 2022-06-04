@extends('layouts.adminbase')
@section('title',"Image")
@section('page','Edit Image $edit->title')
@section('content')

<form role="form" action="{{route('admin_image_update',['id'=>$edit->id])}}" method="post">
  @csrf
    <div class="container">
      <div class="row-2">
        <div class="container-sm">100% wide until small breakpoint</div>
        <div class="container-md">100% wide until medium breakpoint</div>
        <div class="container-lg">100% wide until large breakpoint</div>
        <div class="container-xl">100% wide until extra large breakpoint</div>
        <div class="container-xxl">100% wide until extra extra large breakpoint</div>
      </div>
    </div>
</form>


@endsection