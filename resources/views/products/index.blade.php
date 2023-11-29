<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>List of Products</h2>
    <a href="{{ route('products.create') }}" class="btn btn-lg btn-success mb-2">Add Product</a>

    @if (count($products) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>${{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h5 style="text-align: center; margin-top: -5px;">Sorry!No products available.</h5>
    @endif

    <div style="text-align: center; margin: 10px; margin-top: 50px;">
        <a href="{{ url('/home') }}" class="btn btn-secondary">Back to Project Requirements</a>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
@endsection
