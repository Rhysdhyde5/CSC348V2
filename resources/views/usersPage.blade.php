@extends('layouts.newApp')

@section('title', 'Users')

@section('content')

    @if($user)
    <p>
        Hello, youve jsut got to the page for {{$user}} - yay!
    </p>
    @else
        <p>
            This user is not here.
        </p>
    @endif
@endsection

