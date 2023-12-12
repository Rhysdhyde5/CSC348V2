@extends('layouts.newApp')

@section('title', 'Posts Editor')

@section('content')



<form method="POST" action="{{ route('posts.update', [ 'id' => $post->id ])}}">
    @csrf
    @method('PUT')

    New Title:<input type="text" name="title" value="{{ $post->title }}">
    <br>
    <br>
    New body:<input type="text" name="body" value="{{ $post->body }}">

    <input type="submit" value="Submit" />

    <a href="{{ route('posts.show', ['id' => $post->id])}}">Cancel</a>

    </form>

@endsection
