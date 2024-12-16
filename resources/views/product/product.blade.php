@extends('master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('index_add_product') }}">
                                <button class="btn btn-primary">
                                    <i class="fas fa-plus-circle"></i>
                                    Add
                                </button>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th>No.</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Cost</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($product as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img
                                                    src="{{ $item->image }}"
                                                    alt="{{ $item->image }}"
                                                    style="width: 50px; height: 50px"
                                                >
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->cost }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->category_name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                <a href="{{ route('index_edit_product').'?id='.$item->id }}">
                                                    <button class="btn btn-default">
                                                        <i class="far fa-edit"></i>
                                                        Edit
                                                    </button>
                                                </a>
                                                <a
                                                    href="#"
                                                    class="btn btn-danger"
                                                    onclick="deleteProduct({{ $item->id }})"
                                                >
                                                    <i class="far fa-trash-alt"></i>
                                                    delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection

@section('script')
    <script>
        function deleteProduct(id) {
            let delete_ = confirm('Do you want to delete ?')
            if (delete_) {
                window.location.href = "/admin/delete_product?id=" + id;
            }
        }
    </script>
@endsection
