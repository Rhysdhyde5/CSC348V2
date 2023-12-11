@extends('layouts.newApp')

@section('title', 'Post Details')

@section('content')

    <form method="POST" action="{{ route('posts.store') }}">

        @csrf

        <p>Title: <input type="text" name="title"></p>

        <p>Body: <input type="text" name="body"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('posts.index' )}}">Cancel</a>

    </form>

@endsection
