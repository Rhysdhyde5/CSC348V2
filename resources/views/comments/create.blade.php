@extends('layouts.newApp')

@section('content')

    <form method="POST" action="{{ route('comments.store') }}">

        @csrf

        <p>Comment: <input type="text" name="body"
            value="{{ old('body') }}"></p>

        <input type="submit" value="Submit" />

        <a href="{{ route('posts.show' )}}">Cancel</a>

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
