@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4">Update Product</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="picture" class="form-label">Choose Picture</label>
                    <input class="form-control" type="file" name="picture" id="picture">
                </div>
                <div class="mb-3">
                <label for="title" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $product->title }}" placeholder="Enter product name">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (in PHP)</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}" placeholder="Enter price">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Enter description">{{ $product->description }}</textarea>
            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection