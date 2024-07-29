@extends('layout')

@section('content')
    <form style="display: flex; justify-content:center; align-items:center;" action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <h1>Create Post</h1>

            <div>
                <label style="font-size: 20px; font-weight:bold;" for="title">Title</label> <br>
                <input style="border: 1px solid grey; border-radius:10px; padding:10px;" type="text" placeholder="Title" id="title" name="title" required>
            </div>
            <div style="margin-top: 10px;">
                <label style="font-size: 20px; font-weight:bold;" for="content">Content</label> <br>
                <textarea style="border: 1px solid grey; border-radius:10px; padding:10px;" id="content" rows="10" cols="60" name="content" placeholder="Content" required></textarea>
            </div>
        <button style="margin-top: 10px; padding:5px; background-color:blue; border-radius:5px; color:white; padding-left:20px; padding-right:20px; cursor: pointer;" type="submit">Create</button>
        </div>
    </form>
@endsection
