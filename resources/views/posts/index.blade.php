
@extends('layouts.newApp')

@section('title', 'Posts')

@section('content')
    @if(Auth::check())
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    @endif

    <div class="mt-4">
        <h2>Newest Posts</h2>

        <ul class="list-group">
            @forelse($posts as $post)
                <li class="list-group-item">
                    <a href="{{ route('posts.show', ['id' => $post->id]) }}" style="text-decoration: none; color: #333;">
                        {{ $post->title }}
                    </a>
                </li>
            @empty
                <li class="list-group-item">No posts found.</li>
            @endforelse
        </ul>
    </div>
@endsection

