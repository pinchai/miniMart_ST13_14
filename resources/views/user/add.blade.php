@extends('master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                        <div class="card-body">
                            <form method="post" action="{{ url('user/add') }}">
                                {{--name--}}
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                    >
                                </div>
                                {{--gender--}}
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select
                                        id="gender"
                                        class="form-control"
                                        name="gender"
                                    >
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                {{--phone--}}
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                    >
                                </div>
                                {{--password--}}
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password"
                                        name="password"
                                    >
                                </div>
                                {{--role--}}
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select
                                        id="role"
                                        class="form-control"
                                        name="role"
                                    >
                                        <option value="male">Admin</option>
                                        <option value="female">User</option>
                                    </select>
                                </div>

                                <button type="reset" class="btn btn-danger">Cancel</button>
                                <button type="submit" class="btn btn-primary float-right">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
