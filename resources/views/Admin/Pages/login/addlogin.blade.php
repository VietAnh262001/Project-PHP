<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Add Location</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Login</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{URL::to('admin/login/save_login')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input name="admin_email" type="email" class="form-control @error('admin_email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Email">
      </div>
      @error('admin_email')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input name="admin_password" type="text" class="form-control @error('admin_password') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Password">
      </div>
      @error('admin_password')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="admin_name" type="text" class="form-control @error('admin_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>
      @error('admin_name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Phone</label>
        <input name="admin_phone" type="text" class="form-control @error('admin_phone') is-invalid @enderror" id="exampleInputPassword1" placeholder="Phone">
      </div>
      @error('admin_phone')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" name="addlogin" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
@endsection