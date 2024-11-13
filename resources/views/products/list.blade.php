@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    @if (Session::has('success'))
        <p class="success-message">{{ Session::get('success') }}</p>
    @endif

    @if (Session::has('error'))
        <p class="error-message">{{ Session::get('error') }}</p>
    @endif

  

    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
    </div>

    <table class="product-table">
        <thead>
            <tr>
                <th class="product-header">Name</th>
                <th class="product-header">Description</th>
                <th class="product-header">Price</th>
                <th class="product-header">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="product-row">
                    <td class="product-cell">{{ $item->name }}</td>
                    <td class="product-cell">{{ $item->description }}</td>
                    <td class="product-cell">{{ $item->price }}</td>
                    <td class="product-cell">
                        <a href="{{ route('products.edit', $item->id) }}">Update</a>
                        <a href="{{ route('products.show', $item->id) }}">View</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
</div>

<style>
    .product-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .product-header {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: left;
        padding: 10px;
        border-bottom: 2px solid #ddd;
    }
    .product-row:nth-child(even) {
        background-color: #f9f9f9;
    }
    .product-cell {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
</style>
@endsection
