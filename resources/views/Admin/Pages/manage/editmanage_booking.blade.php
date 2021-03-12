<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Add Booking</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Booking</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editbooking as $edit_value)
  <form role="form" action="{{route('managebooking.update',$edit_value->booking_id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
      @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected {{$edit_value->status == 'Đang chờ xử lý' ? "selected" : " "}} value="Đang chờ xử lý">Đang chờ xử lý</option>
          <option {{$edit_value->status == 'Đã xử lý' ? "selected" : " "}} value="Đã xử lý">Đã xử lý</option>
        </select>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" name="addempolyee" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endforeach
</div>
</div>
@endsection