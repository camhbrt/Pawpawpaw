@extends('app')

@section('content')

        <h1>Posts by {{ $user->name }}</h1>
            
        @foreach ($posts as $post)
            <div>
                <h2>{{ $post->posttitle }}</h2>
                <p>{{ $post->postdescription }}</p>
            </div>
        @endforeach
    @endsection
        