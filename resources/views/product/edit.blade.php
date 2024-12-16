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
                            <form method="post" action="{{  route('update_product')  }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
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
                                        value="{{ $product->title }}"
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
                                                value="{{ $product->cost }}"
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
                                                value="{{ $product->price }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                {{--image--}}
                                <div class="form-group">
                                    <img
                                        src="{{ $product->image }}"
                                        style="width: 100px; height: 100px"
                                    >
                                    <br>
                                    <label for="image">Image URL</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="image"
                                        name="image_url"
                                        value="{{ $product->image }}"
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
                                        <option disabled>----select category----</option>
                                        @foreach($category as $cat)
                                            <option
                                                value="{{ $cat->id }}"
                                                {{ $cat->id == $product->category_id ? 'selected' : '' }}
                                            >
                                                {{ $cat->name }}
                                            </option>
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
                                    >{{ $product->description }}</textarea>
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
