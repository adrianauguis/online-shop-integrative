@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Products</h1>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Product actions">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">View</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.products.delete', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row text-center">
                <div class="col">
                    <a href="{{ route('products.create') }}" class="btn btn-primary mx-2">Create Product</a>
                </div>
                <div class="col">
                    <a href="{{ route('products.index') }}" class="btn btn-primary mx-2">View in user mode</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection