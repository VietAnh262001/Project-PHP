<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Add Location</title>
@endsection

@section('content')
@include('Admin.partials.header')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Location</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editlocation as $edit_value)
  <form role="form" action="{{URL::to('admin/location/update_location/'.$edit_value->location_id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$edit_value->name}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>
      @error('name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected>Status</option>
          <option {{$edit_value->status == 1 ? "selected" : " "}} value="1">Hiện</option>
          <option {{$edit_value->status == 0 ? "selected" : " "}} value="0">Ẩn</option>
        </select>
      </div>
      @error('status')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror

      <div class="form-group">
        <label for="exampleInputPassword1">Prioty</label>
        <input value="{{$edit_value->prioty}}" name="prioty" type="text" class="form-control @error('prioty') is-invalid @enderror" id="exampleInputPassword1" placeholder="prioty">
      </div>
      @error('prioty')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" name="addlocation" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endforeach
</div>
</div>
@endsection