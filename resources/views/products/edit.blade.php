@extends('layout')

@section('content')
    <form style="display: flex; justify-content:center; align-items:center;" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <h1>Edit Product</h1>

            <div>
                <label for="name">Product Name</label>
                <input type="text" placeholder="Product Name" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" placeholder="Price" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div>
                <label for="image">Image</label>
                @if ($product->image)
                    <div>
                        <img src="{{ asset('images/products/' . $product->image) }}" alt="Current Product Image" style="max-width: 100px; max-height: 100px;">
                    </div>
                @endif
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" rows="10" cols="60" name="description" placeholder="Description" required>{{ $product->description }}</textarea>
            </div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
