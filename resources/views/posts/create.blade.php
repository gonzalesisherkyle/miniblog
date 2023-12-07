@extends('layouts.app') 

@section('content')
    <div class="container">
        <h2>Create a Post!</h2>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="form-group mt-4">
                <input type="text" name="title" class="form-control underlined" placeholder="Enter Title" required>
            </div>

            <div class="form-group mt-4">
                <textarea name="content" class="form-control underlined" placeholder="Enter Content" required></textarea>
            </div>
            <div class="d-grid col-1">
                <button type="submit" class="btn btn-success mt-4" style="padding-left: 30px; padding-right: 30px">POST</button>
            </div>
        </form>
    </div>
@endsection
