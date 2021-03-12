@extends('Admin.layouts.admin')

@section('title')
<title>List Room Service</title>
@endsection

@section('content')

<div class="content-wrapper">
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Room Service</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Service</th>
                  <th>Room</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($listroomservice as $roomservice)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$roomservice->servicename}}</td>
                  <td>{{$roomservice->roomname}}</td>
                  <td>{{$roomservice->status == 1 ? "Hiện" : "Ẩn"}}</td>
                  <td class=" py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('editroomservice',['id'=>$roomservice->id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </div>
                  </td>
                  <td class="py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('deleteroomservice',['id'=>$roomservice->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                  @php
                  $i++;             
                   @endphp
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
@endsection