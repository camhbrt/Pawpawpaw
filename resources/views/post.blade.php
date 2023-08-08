@extends('app')
@section('content')
    <form action='/createPost' method='POST'>
        @csrf
        <input name='posttitle' type='text' placeholder="title">
        <textarea name='postdescription' type='text' placeholder="description"></textarea>
        <button>Create Post</button>
    
    </form>

@endsection