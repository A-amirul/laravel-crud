@extends('layout')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn">Create Products</a>
    <table>
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        <img src="{{ asset('images/products/' . $product->image) }}" alt="Product Image" style="max-width: 60px; max-height: 60px;">
                    </td>

                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
