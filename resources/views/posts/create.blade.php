@extends('layouts.newApp')

@section('title', 'Post Details')

@section('content')

    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" style="margin: 20px;">

        @csrf

        <label for="image">Image:</label>
        <input type="file" name="image" style="margin-bottom: 10px;">
        <br>

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" style="width: 100%; padding: 8px; margin-bottom: 10px;">

        <label for="body">Body:</label>
        <textarea name="body" style="width: 100%; height: 150px; padding: 8px; margin-bottom: 10px;">{{ old('body') }}</textarea>

        <button type="submit" style="background-color: #5cb85c; color: #fff; padding: 8px 12px; border: none; border-radius: 4px;">Submit</button>

        <a href="{{ route('posts.index') }}" style="text-decoration: none;">
            <button type="button" style="background-color: #ccc; color: #333; padding: 8px 12px; border: none; border-radius: 4px;">Cancel</button>
        </a>

    </form>

    @if ($errors->any())

        <div style="color: #a94442; background-color: #f2dede; padding: 8px; border-radius: 4px; margin: 20px;">

            Errors:

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

@endsection
