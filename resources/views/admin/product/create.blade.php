@extends('admin.layout')
@section("title","Product listing")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create new a product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Product Information</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url("/admin/product/create")}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Product name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Thumbnail</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Qty</label>
                            <input type="number" name="qty" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text" name="unit" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                            @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
