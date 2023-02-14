@extends('admin.layout')
@section("title","Product listing")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product listing</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url("/admin/product/create")}}">Create new product</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Product Name</th>
                    <th>Thumbnail</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Unit</th>
                    <th style="width: 40px">Status</th>
                </tr>
                </thead>
               <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td><img src="{{ $item->thumbnail }}" class="img-thumbnail" width="80"/> </td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->unit }}</td>
                            <td>
                                @if($item->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-warning">Inactive</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
               </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {!! $data->links("pagination::bootstrap-4") !!}
        </div>
    </div>
    <!-- /.card -->
@endsection
