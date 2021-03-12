<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Edit Payment Method</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Payment Method</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editpay as $edit_value)
  <form role="form" action="{{route('payment.update',$edit_value->id)}}" method="post" enctype="multipart/form-data">
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
          <option selected>Status</option>
          <option {{$edit_value->status == 1 ? "selected" : " "}} value="1">Hiện</option>
          <option {{$edit_value->status == 0 ? "selected" : " "}} value="0">Ẩn</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Prioty</label>
        <input value="{{$edit_value->prioty}}" name="prioty" type="text" class="form-control @error('prioty') is-invalid @enderror" id="exampleInputPassword1" placeholder="prioty">
      </div>
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