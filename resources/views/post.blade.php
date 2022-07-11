@extends('layouts.app')

@section('content')

    <div class="container">
<div class="button mb-2 d-flex justify-content-between">
        <a href="/home/create" class="btn btn-primary btn-lg">Add Post</a>
        {{ $posts->links() }}
</div>
        
       
        @foreach ($posts as $post)
            <div class="card mb-3" style="">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <div class="card-subtitle mb-2 text-muted small">{{ $post->created_at }}</div>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="" class="card-link btn btn-success" type="submit">View</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

