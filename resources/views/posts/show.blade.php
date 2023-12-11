@extends('layouts.newApp')

@section('title', 'Post Details')

@section('content')

    <main>

        <h1>Title: {{$post->title}}</h1>
        <div>
        <p>Body: {{$post->body}}</p>
        </div>
        <h2>comments:</h2>
        <ul>
        @foreach ($post->comments as $comment)
        <li> {{ $comment->body }} </li>
        <a href="#">this is link</a>
        @endforeach
        </ul>

    </main>

@endsection
