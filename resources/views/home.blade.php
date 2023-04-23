@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome To Our Online Store!') }}</div>
                <div class="card-body">
                <h4>{{ __('Successfully Logged In!') }}</h4>
                <p>Start shopping and discover our amazing products!</p>
                <a href="{{ route('products.index') }}" class="btn btn-success">{{ __('Shop Now') }}</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection