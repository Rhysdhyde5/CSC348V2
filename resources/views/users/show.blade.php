@extends('layouts.newApp')

@section('title', 'Users Details')

@section('content')

    <main>

        <h2>Username: {{$user->username}}</h2>

        <h2>Email: {{$user->email}}</h2>

        <h2>Post:</h2>
        <ul>
        @foreach ($user->posts as $post)
        <li> {{ $post->title }} </li>
        <a href="#">this is link</a>
        @endforeach
        </ul>

        <h2>Comments:</h2>
        <ul>
        @foreach ($user->comments as $comment)
        <li> {{ $comment->body }} </li>
        <a href="#">this is link</a>
        @endforeach
        </ul>

    </main>

@endsection
