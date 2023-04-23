@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ asset('images/' . $product->picture) }}" height="450px" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $product->title }}</h2>
                    <h3 class="card-text">Price: ₱ {{ $product->price }}</h3>
                    <hr>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><small class="text-muted">Published for sale at: {{ $product->created_at }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
