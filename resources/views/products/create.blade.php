@extends('layout')

@section('content')
    <form style="display: flex; justify-content:center; align-items:center;" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <h1>Create Product</h1>

            <div>
                <label  for="name">Product Name</label>
                <input type="text" placeholder="Product Name" id="name" name="name" required>
            </div>
            <div>
                <label  for="price">Price</label>
                <input type="number" placeholder="Price" id="price" name="price" required>
            </div>
            <div>
                <label  for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" rows="10" cols="60" name="description" placeholder="Description" required></textarea>
            </div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
