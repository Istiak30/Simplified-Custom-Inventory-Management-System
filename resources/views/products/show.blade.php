<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Product Details</h2>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back to Products</a>
@endsection
