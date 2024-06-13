@extends('master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Category</li>
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
                            <a href="{{ route('category') }}">
                                <button class="btn btn-primary">
                                    <i class="fas fa-arrow-circle-left"></i>
                                    Back
                                </button>
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{  route('update_category')  }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                {{--name--}}
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        value="{{ $category->name }}"
                                    >
                                </div>

                                {{--description--}}
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea
                                        class="form-control"
                                        id="description"
                                        name="description"
                                        rows="5"
                                    >{{ $category->description }}</textarea>
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
