@extends('layouts.newApp')

@section('title', 'Users')

@section('content')

    <div style="margin: 20px; text-align: center;">
        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Explore our community:</h2>
        <ul style="list-style: none; padding: 0;">

            @foreach($users as $user)

                <a href="{{ route('users.show', ['id' => $user->id]) }}" style="text-decoration: none; color: #555;">
                    <li style="margin-bottom: 20px; font-size: 20px; border-bottom: 2px solid #ccc; padding-bottom: 15px; transition: background-color 0.3s;">
                        {{ $user->username }}
                    </li>
                </a>

            @endforeach

        </ul>
    </div>

@endsection
