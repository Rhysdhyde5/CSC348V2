@extends('layouts.newApp')

@section('title', 'Posts')

@section('content')

    <p>Newest Posts: </p>
    <ul>

        @foreach($posts as $post)

            <a href="{{route('posts.show', ['id' => $post->id])}}"><li>{{$post->title}}</li></a>

        @endforeach

    </ul>

@endsection

