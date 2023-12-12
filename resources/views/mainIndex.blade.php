@extends('layouts.newApp')

@section('title', 'Home Page')

@section('content')

<main>
    <div>
        <a href="{{route('posts.index')}}"><h2> Posts </h2></a>

        <a href="{{route('users.index')}}"><h2> Users </h2></a>

    </div>
</main>



@endsection
