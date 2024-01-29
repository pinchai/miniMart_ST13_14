@extends('master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
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
                            <button class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i>
                                Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach([1,2,3,4,5] as $item)
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>theara</td>
                                        <td>male</td>
                                        <td>099 88 7766</td>
                                        <td>*********</td>
                                        <td>Admin</td>
                                        <td>
                                            <button class="btn btn-default">
                                                <i class="far fa-edit"></i>
                                                Edit
                                            </button>
                                            <button class="btn btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                Delete
                                            </button>
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
