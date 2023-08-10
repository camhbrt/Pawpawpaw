@extends('app')
@section('content')


<div class='flex flex-row'>
    <div class='bg-rose-800 justify-between flex flex-col h-screen p-8'>
        <h1 class='text-yellow-50 font-custom text-3xl' >PawPawPaw</h1>
        <div class='flex flex-col justify-between'>
            <h1 class='text-yellow-50'>Actualités</h1>
            <a href='/createPost' class='text-yellow-50'>Créer un nouveau post</a>
            <a href='/userpage' class='text-yellow-50'>Voir mon profil</a>
        </div>
        <a class="text-yellow-50" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Se déconnecter
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    
    <form action='/createPost' method='POST' enctype='multipart / form data' class='flex flex-row'>
        @csrf
        <div class='bg-yellow-50 text-pink-950 flex flex-col h-screen p-8'>
            <div class='flex flex-col'>
                <label for='' >Titre du Post</label>
                <input name='posttitle' type='text' placeholder="title">
            </div>
            <div class='flex flex-col'>
                <label for='' >Description du Post</label>
                <textarea name='postdescription' type='text' placeholder="description"></textarea>
            </div>
            <div class='flex flex-col'>
                <label for='' >Image à charger</label>
                <input name='image_path' type='file'>
            </div>
            </br>
            <button class="bg-red-500 rounded " type='submit'>Publier le Post</button>

        </div>
    </form>
</div>
@endsection