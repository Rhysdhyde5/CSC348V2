@extends('layouts.newApp')

@section('title', 'Post Details')

@section('content')

    <main>
        <h3>Author: {{$post->user->username}}
        <h1>Title: {{$post->title}}</h1>
        <div>
        <p>Body: {{$post->body}}</p>
        </div>
        <h2>comments:</h2>
        <ul>
        @foreach ($post->comments as $comment)
        <li> {{ $comment->body }} </li>
        <a href="{{route('users.show', ['id' => $comment->user->id])}}"><h4> Writen by: {{ $comment->user->username }} </h4></a>
        @endforeach
        </ul>

    </main>

@endsection
