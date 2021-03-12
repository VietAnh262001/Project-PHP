@extends('Admin.layouts.admin')

@section('title')
<title>List User</title>
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
            <h3 class="card-title">List User</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($listuser as $user)
                <tr>
                  <td>{{$user->user_id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->password}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->address}}</td>
                  <td class="py-0 align-middle">
                    <form action="{{route('user.destroy',$user->user_id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('DELETE')
                      <div class="btn-group btn-group-sm">
                        <button  onclick="return confirm('Are you sure you want to delete?')" href="" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      </div>
                    </form>
                  </td>
                </tr>
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