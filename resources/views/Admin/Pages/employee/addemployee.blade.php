<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Add Employee</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Employee</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>
      @error('name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror

       <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src=" " style="width: 100px;margin-left: 16px">
      </div>
      @error('image')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror

      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected>Status</option>
          <option value="1">Hiện</option>
          <option value="0">Ẩn</option>
        </select>
      </div>
      @error('status')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="ckeditor6" rows="3" placeholder="description"></textarea>
      </div>
      @error('description')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Position</label>
        <select name="position" class="custom-select custom-select-sm-3">
          <option>Position</option>
          <option>CEO & Founder</option>
          <option>General Manager</option>
          <option>HS Manager</option>
          <option>Main Security</option>
          <option>Main Security</option>
          <option>Staff</option>
        </select>
      </div>
      @error('position')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" name="addempolyee" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
@endsection