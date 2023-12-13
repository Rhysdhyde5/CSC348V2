@extends('layouts.newApp')

@section('title', 'Posts Editor')

@section('content')

    <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
        @csrf
        @method('PUT')

        <div style="margin: 20px;">
            <label for="title">New Title:</label>
            <input type="text" name="title" value="{{ $post->title }}" style="width: 100%; padding: 8px; margin-bottom: 10px;">

            <label for="body">New Body:</label>
            <textarea name="body" style="width: 100%; height: 150px; padding: 8px; margin-bottom: 10px;">{{ $post->body }}</textarea>

            <button type="submit" style="background-color: #5cb85c; color: #fff; padding: 8px 12px; border: none; border-radius: 4px;">Submit</button>

            <a href="{{ route('posts.show', ['id' => $post->id]) }}" style="text-decoration: none;">
                <button type="button" style="background-color: #ccc; color: #333; padding: 8px 12px; border: none; border-radius: 4px;">Cancel</button>
            </a>
        </div>
    </form>

@endsection
