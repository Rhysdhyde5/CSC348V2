@extends('layouts.newApp')

@section('title', 'Users Details')

@section('content')

    <ul>

        <li>Username: {{$user->username}}</li>

        <li>Email: {{$user->email}}</li>

    </ul>

@endsection
