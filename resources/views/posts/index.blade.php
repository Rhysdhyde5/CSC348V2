@extends('layouts.newApp')

@section('title', 'Posts')



@section('content')
    <a href="{{ route('posts.create')}}"><button>Create New Post</button></a>
    <br>
    <br>
    <p>Newest Posts: </p>
    <ul>

        @foreach($posts as $post)

            <a href="{{route('posts.show', ['id' => $post->id])}}"><li>{{$post->title}}</li></a>

        @endforeach

    </ul>

@endsection

