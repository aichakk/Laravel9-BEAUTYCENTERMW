@extends('layouts.adminbase')

@section('title', 'Add Product')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Product Elements</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/admin/product/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                          <div class="form-group">
                            <label>Parent Product</label>
                            <select class="form-control select2" name="parent_id" style="width: 100%">
                                @foreach($data as $rs)
                              <option value="{{$rs->id}}">{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        </div> <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div><div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" class="form-control" name="price" value="0">
                        </div><div class="form-group">
                            <label for="exampleInputEmail1">Quantity</label>
                            <input type="number" class="form-control" name="price" value="0">
                        </div><div class="form-group">
                            <label for="exampleInputEmail1">Minimum Quantity</label>
                            <input type="number" class="form-control" name="price" value="0">
                        </div><div class="form-group">
                            <label for="exampleInputEmail1">Tax %</label>
                            <input type="number" class="form-control" name="tax" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Detail</label>
                            <textarea class="form-control" name="detail">

                            </textarea>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                                </div>
                                <div class="input-group-append">
                                     <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>



                               <div class="form-group">
                                   <label>Status</label>
                                   <select class="form-control" name="status">
                                       <option>True</option>
                                       <option>False</option>
                                   </select>

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
