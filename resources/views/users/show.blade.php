@extends('layouts.newApp')

@section('title', 'Users Details')

@section('content')

    <main>

        <h2>Username: {{$user->username}}</h2>

        <h2>Email: {{$user->email}}</h2>

        <h2>This Users Posts:</h2>
        <ul>
        @foreach ($user->posts as $post)
        <li><a href="{{route('posts.show', ['id' => $post->id])}}"><h4> {{ $post->title }} </h4></a></li>
        @endforeach
        </ul>

        <h2>Comments:</h2>
        <ul>
        @foreach ($user->comments as $comment)
        <a href="{{route('posts.show', ['id' => $comment->post->id])}}"><h4> Posted on: {{ $comment->post->title }} </h4></a>
        <li> {{ $comment->body }} </li>
        @endforeach
        </ul>

    </main>

@endsection
