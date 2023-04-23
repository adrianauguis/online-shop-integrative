@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
  <h1 class="text-center mb-5">All Products</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($products as $product)
      <div class="col">
        <div class="card shadow-sm h-100">
          <img src="images/{{ $product->picture }}" class="card-img-top" alt="{{ $product->title }}">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title">{{ $product->title }}</h5>
            <div class="d-flex justify-content-between align-items-center">
              <h6 class="card-subtitle text-success mb-2">₱{{ $product->price }}</h6>
              <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary">View Details</a>
            </div>
            <p class="card-text">{{ $product->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
<footer class="footer mt-auto py-3 bg-light text-center">
  <div class="container">
    <span class="text-muted">Auguis, Co, Engracia &copy; 2023. All rights reserved.</span>
  </div>
</footer>
@endsection