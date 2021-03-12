<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>add User</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add User</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>

      @error('user_name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"  id="exampleInputPassword1" placeholder="email">
      </div>
      @error('email')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
       <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="text" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="password">
      </div>
      @error('password')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Phone</label>
        <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"  id="exampleInputPassword1" placeholder="phone">
      </div>
      @error('phone')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input name="address" type="text" class="form-control @error('address') is-invalid @enderror"  id="exampleInputPassword1" placeholder="address">
      </div>
      @error('address')
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
        <label for="exampleInputPassword1">Remember Token</label>
        <input name="remember_token" type="text" class="form-control @error('remember_token') is-invalid @enderror" id="exampleInputPassword1" placeholder="remember token">
      </div>
      @error('remember_token')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Email Verified At</label>
        <input name="email_verified_at" type="text" class="form-control @error('email_verified_at') is-invalid @enderror" id="exampleInputPassword1" placeholder="email verified at">
      </div>
      @error('email_verified_at')
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
        <label for="exampleFormControlTextarea1">Url</label>
        <textarea name="url" class="form-control @error('url') is-invalid @enderror" id="ckeditor10" rows="3" placeholder="url"></textarea>
      </div>
      @error('url')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="adduser" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
@endsection