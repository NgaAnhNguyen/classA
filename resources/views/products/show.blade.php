@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div class="product-details">
        <h2>{{ $product->name }}</h2>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->price }}</p>
        <p><strong>Created At:</strong> {{ $product->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $product->updated_at }}</p>
    </div>
    
  
    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
</div>
@endsection

<style>
    .product-details {
        margin-top: 20px;
    }
    .product-details h2 {
        margin-bottom: 10px;
    }
    .product-details p {
        margin-bottom: 5px;
    }
    .btn-secondary {
        background-color: #6c757d;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
    }
    .btn-secondary:hover {
        background-color: #5a6268;
    }
    

    .mt-3 {
        margin-top: 50px; 
    }
</style>
