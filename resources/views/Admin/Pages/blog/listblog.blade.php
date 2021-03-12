@extends('Admin.layouts.admin')

@section('title')
<title>List Blog</title>
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
            <h3 class="card-title">List Blog</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>slug</th>
                  <th>Image</th>
                  <th>Summary</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th>Meta_key</th>
                  <th>Meta_title</th>
                  <th>Meta_descript</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($listblog as $blog)
                <tr>
                  <td>{{$blog->blog_id}}</td>
                  <td>{{$blog->name}}</td>
                  <td>{{$blog->slug}}</td>
                  <td><img width="100px" height="100px" src="{{asset('public/uploads/blog/'.$blog->image)}}"></td>
                  <td>{{$blog->summary}}</td>
                  <td>{{$blog->content}}</td>
                  <td>{{$blog->status}}</td>
                  <td>{{$blog->meta_key}}</td>
                  <td>{{$blog->meta_title}}</td>
                  <td>{{$blog->meta_descript}}</td>
                  <td class="py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('editblog',['id'=>$blog->blog_id ])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </div>
                  </td>
                  <td class="py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('deleteblog',['id'=>$blog->blog_id ])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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