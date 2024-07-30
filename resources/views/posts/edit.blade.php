@extends('layout')

@section('content')
    <form style="display: flex; justify-content:center; align-items:center;" action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <h1>Edit Post</h1>
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div>
                <label for="content">Content</label>
                <textarea id="content" rows="10" cols="60" type="textarea" name="content" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
