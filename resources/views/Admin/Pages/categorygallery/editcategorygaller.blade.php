<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Edit Category Gallery</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Category Gallery</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editcategorygallery as $edit_value)
  <form role="form" action="{{route('categorygallery.update',$edit_value->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$edit_value->name}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected {{$edit_value -> status == 1 ? "selected" : " "}}  value="1">Hiện</option>
          <option  {{$edit_value -> status == 0 ? "selected" : " "}} value="0">Ẩn</option>
        </select>
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