@extends('master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update User</li>
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
                            <a href="{{ route('user') }}">
                                <button class="btn btn-primary">
                                    <i class="fas fa-arrow-circle-left"></i>
                                    Back
                                </button>
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{  route('update_user')  }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                {{--name--}}
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        value="{{ $user->name }}"
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
                                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
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
                                        value="{{ $user->phone }}"
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
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>

                                <button type="reset" class="btn btn-danger">Cancel</button>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
