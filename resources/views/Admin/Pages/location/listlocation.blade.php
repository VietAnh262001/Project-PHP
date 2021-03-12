@extends('Admin.layouts.admin')

@section('title')
<title>List Location</title>
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
            <h3 class="card-title">List Location</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Prioty</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($listlocation as $location)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$location->name}}</td>
                  <td>{{$location->status}}</td>
                  <td>{{$location->prioty}}</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('editlocation',['id'=>$location->location_id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </div>
                  </td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('deletelocation',['id'=>$location->location_id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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