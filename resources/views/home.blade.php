@extends('layouts.app')

@section('content')
<div class="container">
        <!-- Your Posts Section -->
        <div class="row justify-content-center text-left mb-4">
            <div class="col-md-8">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($posts && $posts->count() > 0)
                    @foreach ($posts as $post)
                        <div class="card mb-3" style="border-radius: 0;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <p class="card-text"><small class="text-muted">{{ $post->created_at->format('jS \of F Y h:i:s A') }}</small></p>
                                <div class="d-flex justify-content-start mb-3">
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mr-2" style="padding-left: 30px; padding-right: 30px">DELETE</button>
                                    </form>
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-success" style="padding-left: 30px; padding-right: 30px">EDIT</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No posts yet.</p>
                @endif
            </div>
        </div>

        <!-- Create Post Section -->
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 0;">
                    <div class="card-body">
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary" style="padding-left: 30px; padding-right: 30px">CREATE NEW POST</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
