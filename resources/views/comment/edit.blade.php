@extends('layouts.newApp')

@section('title', 'Comment Editor')

@section('content')



<form method="POST" action="{{ route('comments.update', [ 'id' => $comment->id ])}}">
    @csrf
    @method('PUT')

    Update Comment:<input type="text" name="body" value="{{ $comment->body }}">

    <input type="submit" value="Submit" />

    <a href="{{ route('posts.show', ['id' => $comment->post_id])}}">Cancel</a>

    </form>

@endsection
