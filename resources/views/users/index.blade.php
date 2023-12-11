@extends('layouts.newApp')

@section('title', 'Users')

@section('content')

    <p>The users of this app are: </p>
    <ul>

        @foreach($users as $user)

            <a href="{{route('users.show', ['id' => $user->id])}}"><li>{{$user->username}}</li></a>

        @endforeach

    </ul>

@endsection

