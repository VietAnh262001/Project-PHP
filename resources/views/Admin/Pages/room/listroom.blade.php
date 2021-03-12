@extends('Admin.layouts.admin')

@section('title')
<title>List Room</title>
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
                <h3 class="card-title">List Room</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Category</th>
                <th>Location</th>
                <th>Descript</th>
                <th>Content</th>
                <th>Area</th>
                <th>Bed</th>
                <th>Bath</th>
                <th>Status</th>
                <th>Edit\Delete</th>
                  </tr>
                </thead>
                  <tbody>
                  @php
              $i=1;
              @endphp
              @foreach($listroom as $room)
              <tr>
                <td>{{$i}}</td>
                <td>{{$room->name}}</td>
                <td><img width="100px" height="100px" src="{{asset('public/uploads/room/'.$room->image)}}"></td>
                 <td>{{$room->price}}</td>
                <td>{{$room->category_name}}</td>
                <td>{{$room->location_name}}</td>
                <td>{{$room->description}}</td>
                <td>{{$room->content}}</td>
                <td>{{$room->area}}</td>
                <td>{{$room->bed}}</td>
                <td>{{$room->bath}}</td>
                <td>{{$room->status}}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="{{route('editroom',['id'=>$room->room_id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  </div>
                  <div class="btn-group btn-group-sm">
                    <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('deleteroom',['id'=>$room->room_id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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