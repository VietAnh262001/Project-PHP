<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Add Room Service</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Room Service</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editroomservice as $edit_value)
  <form role="form" action="{{URL::to('admin/roomservice/update_roomservice/'.$edit_value->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputPassword1">Service</label>
        <select name="service" class="custom-select custom-select-sm-3">
          <option selected>Service</option>
          @foreach($service as $sv)
          <option value="{{$sv->service_id}}" {{$sv->service_id == $edit_value->service_id ? 'selected':' ' }}>{{$sv->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Room</label>
        <select name="room" class="custom-select custom-select-sm-3">
          <option selected>Room</option>
          @foreach($rooms as $room)
          <option value="{{$room->room_id}}" {{$room->room_id == $edit_value->room_id ? 'selected':' ' }}>{{$room->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected>Status</option>
          <option {{$edit_value->status == 1 ? "selected" : " "}} value="1">Hiện</option>
          <option {{$edit_value->status == 0 ? "selected" : " "}} value="0">Ẩn</option>
        </select>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" name="addroomservice" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  @endforeach
</div>
</div>
@endsection