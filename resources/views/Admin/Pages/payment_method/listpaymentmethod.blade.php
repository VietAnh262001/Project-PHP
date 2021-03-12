@extends('Admin.layouts.admin')

@section('title')
<title>List Payment Method</title>
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
            <h3 class="card-title">List Payment method</h3>
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
                @foreach($listpaymentmethod as $payment)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$payment->name}}</td>
                  <td>{{$payment->status}}</td>
                  <td>{{$payment->prioty}}</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('payment.edit',$payment->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </div>
                  </td>
                  <td class="text-right py-0 align-middle">
                    <form action="{{route('payment.destroy',$payment->id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('DELETE')
                      <div class="btn-group btn-group-sm">
                        <button  onclick="return confirm('Are you sure you want to delete?')" href="" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      </div>
                    </form>
                  </td> 
                  @php
                  $i++;             
                  @endphp
                  @endforeach
                </tr>
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