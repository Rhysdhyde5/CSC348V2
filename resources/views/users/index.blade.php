@extends('layouts.newApp')

@section('title', 'Users')

@section('content')

    <p>The users of this app are: </p>
    <ul>

        @foreach($users as $user)

            <li>{{ $user->username}}</li>

        @endforeach

    </ul>

@endsection

