@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Post - {{ $post->title }}</h2>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group mt-4">
                <input type="text" name="title" class="form-control underlined" value="{{ $post->title }}" required>
            </div>
            <div class="form-group mt-2">
                <textarea name="content" class="form-control underlined" required>{{ $post->content }}</textarea>
            </div>
            <div class="mt-4 d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-success mt-2" style="padding-left: 30px; padding-right: 30px">Save</button>
                <a href="{{ route('home') }}" class="btn btn-secondary mt-2" style="padding-left: 30px; padding-right: 30px">Back to Home</a>
            </div>
        </form>
    </div>
@endsection
