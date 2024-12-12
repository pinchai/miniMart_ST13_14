@extends('master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
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
                            <a href="{{ route('product') }}">
                                <button class="btn btn-primary">
                                    <i class="fas fa-arrow-circle-left"></i>
                                    Back
                                </button>
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{  route('create_product')  }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{--title--}}
                                <div class="form-group">
                                    <label for="title">Product Title</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="title"
                                        name="title"
                                        value="{{ old('title') }}"
                                    >
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        {{--cost--}}
                                        <div class="form-group">
                                            <label for="cost">Cost</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="cost"
                                                name="cost"
                                                value="{{ old('cost') }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        {{--price--}}
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="price"
                                                name="price"
                                                value="{{ old('price') }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                {{--image--}}
                                <div class="form-group">
                                    <label for="image">Image URL</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="image"
                                        name="image_url"
                                        value="{{ old('image_url') }}"
                                    >
                                </div>

                                {{--category--}}
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select
                                        class="form-control"
                                        id="category_id"
                                        name="category_id"
                                    >
                                        <option selected disabled>----select category----</option>
                                        @foreach($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{--description--}}
                                <div class="form-group">
                                    <label for="description">description</label>
                                    <textarea
                                        class="form-control"
                                        id="description"
                                        name="description"
                                        rows="5"
                                    >
                                        {{ old('description') }}
                                    </textarea>
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
