@extends('Admin.layouts.admin')

@section('title')
<title>List Booking</title>
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
                <h3 class="card-title">List Booking</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                <th>ID</th>
                <th>Name User</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Payment</th>
                <th>Total</th>
                <th>Status</th>
                <th>Note</th>
                <th>Edit\Delete</th>
                  </tr>
                </thead>
                  <tbody>
              @foreach($booking as $bk)
              <tr>
                <td>{{$bk->booking_id }}</td>
                <td>{{$bk->user_name}}</td>
                <td>{{$bk->name}}</td>
                <td>{{$bk->email}}</td>
                 <td>{{$bk->phone}}</td>
                <td>{{$bk->address}}</td>
                <td>{{$bk->city}}</td>
                <td>{{$bk->country}}</td>
                <td>{{$bk->start_date}}</td>
                <td>{{$bk->end_date}}</td>
                <td>{{$bk->payment_name}}</td>
                <td>{{$bk->total}}</td>
                <td>{{$bk->status}}</td>
                <td>{{$bk->note}}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="{{route('managebooking.edit',$bk->booking_id)}}"><i class="btn btn-info far fa-edit"></i></a>
                  </div>
                 <form action="{{route('managebooking.destroy',$bk->booking_id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button style="display: inline-block;
                        background: none;
                        border: none;" onclick="return confirm('Are you sure you want to delete?')"><a href=""><i class="btn btn-danger fas fa-trash-alt"></i></a></button>
                      </form>
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