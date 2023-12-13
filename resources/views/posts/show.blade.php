@extends('layouts.newApp')

@section('title', 'Post Details')

@section('content')
    <main style="font-family: 'Arial', sans-serif; margin: 20px;">
        <a href="{{ route('users.show', ['id' => $post->user->id]) }}" style="text-decoration: none; color: #333;">
            <h3 style="margin-top: 5px; font-size: 14px;">Author: {{ $post->user->username }}</h3>
        </a>
        <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Title: {{ $post->title }}</h2>
        <div style="background-color: #f9f9f9; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
            <p>{{ $post->body }}</p>

            @can('delete', $post)
                <a href="{{ route('posts.edit', ['id' => $post->id]) }}" style="text-decoration: none; display: inline-block;">
                    <button type="button" style="background-color: #fff; color: #333; padding: 5px 8px; border: 1px solid #ccc; border-radius: 4px; margin-right: 5px;">Edit</button>
                </a>

                <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: #d9534f; color: #fff; padding: 5px 8px; border: none; border-radius: 4px;">Delete Post</button>
                </form>
            @endcan
        </div>

        <h3 style="color: #555;">Comments:</h3>

        <div style="margin-bottom: 20px;">
            @if(Auth::check())
                <form method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    <p><input type="text" name="body" value="{{ old('body') }}" style="padding: 8px;"></p>
                    <input type="text" name="post_id" value="{{ $post->id }}" hidden>
                    <input type="submit" value="Submit" style="background-color: #5cb85c; color: #fff; padding: 5px 8px; border: none; border-radius: 4px;">
                </form>
            @endif

            @if ($errors->any())
                <div style="color: #a94442; background-color: #f2dede; padding: 8px; border-radius: 4px;">
                    Errors:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <ul style="list-style: none; padding: 0;">
            @foreach ($post->comments as $comment)
                <li style="border: 1px solid #ddd; border-radius: 4px; padding: 10px; margin-bottom: 10px;">
                    {{ $comment->body }}
                    <a href="{{ route('users.show', ['id' => $comment->user->id]) }}" style="text-decoration: none; color: #333; font-size: 12px;">
                        <h4 style="margin-top: 5px; font-size: 14px;">Written by: {{ $comment->user->username }}</h4>
                    </a>
                    @can('delete', $comment)
                        <a href="{{ route('comments.edit', ['id' => $comment->id]) }}" style="text-decoration: none;">
                            <button type="button" style="background-color: #fff; color: #333; padding: 5px 8px; border: 1px solid #ccc; border-radius: 4px; margin-right: 5px;">Edit</button>
                        </a>

                        <form method="POST" action="{{ route('comments.destroy', ['id' => $comment->id]) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: #d9534f; color: #fff; padding: 5px 8px; border: none; border-radius: 4px;">Delete</button>
                        </form>
                    @endcan
                </li>
            @endforeach
        </ul>
    </main>
@endsection
