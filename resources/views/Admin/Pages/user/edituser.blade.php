<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Edit User</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit User</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($edituser as $edit_value)
  <form role="form" action="{{route('user.update',$edit_value->user_id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
   @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$edit_value->name}}" name="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>

      @error('user_name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input value="{{$edit_value->email}}" name="email" type="text" class="form-control @error('email') is-invalid @enderror"  id="exampleInputPassword1" placeholder="email">
      </div>
      @error('email')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
       <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input value="{{$edit_value->password}}" name="password" type="text" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="password">
      </div>
      @error('password')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Phone</label>
        <input value="{{$edit_value->phone}}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"  id="exampleInputPassword1" placeholder="phone">
      </div>
      @error('phone')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input value="{{$edit_value->address}}" name="address" type="text" class="form-control @error('address') is-invalid @enderror"  id="exampleInputPassword1" placeholder="address">
      </div>
      @error('address')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src="{{url($edit_value->image)}}" style="width: 100px;margin-left: 16px">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Remember Token</label>
        <input value="{{$edit_value->remember_token}}" name="remember_token" type="text" class="form-control @error('remember_token') is-invalid @enderror" id="exampleInputPassword1" placeholder="remember token">
      </div>
      @error('remember_token')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Email Verified At</label>
        <input value="{{$edit_value->email_verified_at}}" name="email_verified_at" type="text" class="form-control @error('email_verified_at') is-invalid @enderror" id="exampleInputPassword1" placeholder="email verified at">
      </div>
      @error('email_verified_at')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected>Status</option>
          <option {{$edit_value->status == 1 ? 'selected' : " "}} value="1">Hiện</option>
          <option {{$edit_value->status == 0 ? 'selected' : " "}} value="0">Ẩn</option>
        </select>
      </div>
      @error('status')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Url</label>
        <textarea name="url" class="form-control @error('url') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="url">{{$edit_value->url}}</textarea>
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
  @endforeach
</div>
</div>
@endsection