@extends('layouts.newApp')

@section('title', 'Post Details')

@section('content')

    <form method="POST" action="{{ route('posts.store') }}">

        @csrf

        <p>Title: <input type="text" name="title"
            value="{{ old('title') }}"></p>



        <p>Body: <textarea type="text" name="body"
            value="{{ old('body') }}"></textarea></p>

        <input type="submit" value="Submit" />

        <a href="{{ route('posts.index' )}}">Cancel</a>

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



@endsection
