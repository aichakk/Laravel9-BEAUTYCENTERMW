@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <a href="/admin/category/edit/{{$data->id}}" class="btn btn-block bg-gradient-info" style="width: 200px">Edit Category</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/admin/category/destroy/{{$data->id}}"  onclick="return confirm('Deleting !! Are you sure?')" class="btn btn-block bg-gradient-danger" style="width: 200px">Delete Category</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Show Category</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">

                        <tr>
                            <th style="width: 150px">Id</th>
                            <th>{{$data->id}}</th>
                        </tr>

                        <tr>
                            <th>Title</th>
                            <th>{{$data->title}}</th>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <th>{{$data->keywords}}</th>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <th>{{$data->image}}</th>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <th>{{$data->status}}</th>
                        </tr><tr>
                            <th>Created Date</th>
                            <th>{{$data->created_at}}</th>
                        </tr>
<tr>
                            <th>Update Date</th>
                            <th>{{$data->updated_at}}</th>
                        </tr>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
