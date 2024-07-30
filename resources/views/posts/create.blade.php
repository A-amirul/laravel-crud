@extends('layout')

@section('content')
    <form style="display: flex; justify-content:center; align-items:center;" action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <h1>Create Post</h1>

            <div>
                <label for="title">Title</label>
                <input type="text" placeholder="Title" id="title" name="title" required>
            </div>
            <div>
                <label for="content">Content</label>
                <textarea id="content" rows="10" cols="60" name="content" placeholder="Content" required></textarea>
            </div>
        <button type="submit">Create</button>
        </div>
    </form>
@endsection
