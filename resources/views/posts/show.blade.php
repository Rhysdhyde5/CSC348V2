@extends('layouts.newApp')

@section('title', 'Post Details')

@section('content')

    <main>
        <h3>Author: {{$post->user->username}}
        <h1>Title: {{$post->title}}</h1>
        <div>
        <p>Body: {{$post->body}}</p>

        <form method="POST"
            action="{{ route('posts.destroy', ['id' => $post->id])}}">

            @csrf

            @method('DELETE')

            <button type="submit">Delete</button>

        </form>

        <a href="{{ route('posts.edit', ['id' => $post->id])}}"><button type="text">Edit</button></a>

        </div>
        <h2>comments:</h2>

        <div>
            <form method="POST" action="{{ route('comments.store')}}">

                @csrf

                <p>Comment: <input type="text" name="body"
                    value="{{ old('body') }}"></p>

                <input type="text" name="post_id" value="{{ $post->id }}" hidden>

                <input type="submit" value="Submit" />

            </form>

            @if ($errors->any())

                <div>

                    Errors:

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }} </li>

                        @endforeach

                    </ul>

                </div>

                @endif
        </div>

        <ul>
        @foreach ($post->comments as $comment)
        <li> {{ $comment->body }} </li>
        <a href="{{route('users.show', ['id' => $comment->user->id])}}">
            <h4> Writen by: {{ $comment->user->username }} </h4></a>
            <a href="{{ route('comments.edit', ['id' => $comment->id])}}"><button type="text">Edit</button></a>
            <form method="POST"
            action="{{ route('comments.destroy', ['id' => $comment->id])}}">


            @csrf

            @method('DELETE')

            <button type="submit">Delete</button>

        </form>
        @endforeach
        </ul>


    </main>

@endsection
