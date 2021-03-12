@extends('Admin.layouts.admin')

@section('title')
<title>List Booking Service</title>
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
            <h3 class="card-title">List Booking Service</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Orders</th>
                  <th>Room ID</th>
                  <th>Service ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th>Edit\Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($booking_service as $bk)
                <tr>
                  <td>{{$bk->booking_room_id}}</td>
                  <td>{{$bk->room_id}}</td>
                  <td>{{$bk->resturent_service_id}}</td>
                  <td>{{$bk->name}}</td>
                  <td>{{$bk->price}}</td>
                  <td>{{$bk->quatity}}</td>
                  <td>{{$bk->status}}</td>

                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </div>
                    <div class="btn-group btn-group-sm">
                      <a onclick="return confirm('Are you sure you want to delete?')" href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>

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