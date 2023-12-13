@extends('layouts.newApp')

@section('title', 'Users Details')

@section('content')

    <main style="margin: 20px;">

        <div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

            <h2 style="font-size: 32px; margin-bottom: 15px; color: #333;">User Profile: {{$user->username}}</h2>

            <div style="border-bottom: 2px solid #ccc; padding-bottom: 20px; margin-bottom: 20px;">
                <h2 style="font-size: 24px; margin-bottom: 15px; color: #333;">Email: {{$user->email}}</h2>

                <h2 style="font-size: 24px; margin-bottom: 15px; color: #333;">This User's Posts:</h2>
                <ul style="list-style: none; padding: 0;">

                    @foreach ($user->posts as $post)
                        <li style="margin-bottom: 15px; font-size: 20px;">
                            <a href="{{ route('posts.show', ['id' => $post->id]) }}" style="text-decoration: none; color: #007bff; transition: color 0.3s;">
                                {{ $post->title }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>

            <h2 style="font-size: 24px; margin-bottom: 15px; color: #333;">Comments this user posted:</h2>
            <ul style="list-style: none; padding: 0;">

                @foreach ($user->comments as $comment)
                    <li style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; margin-bottom: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <a href="{{ route('posts.show', ['id' => $comment->post->id]) }}" style="text-decoration: none; color: #007bff; transition: color 0.3s;">
                            <h4 style="font-size: 22px; margin-bottom: 10px;">Posted on: {{ $comment->post->title }}</h4>
                        </a>
                        <p style="font-size: 18px; margin-bottom: 0; color: #555;">{{ $comment->body }}</p>
                    </li>
                @endforeach

            </ul>

        </div>

    </main>

@endsection
