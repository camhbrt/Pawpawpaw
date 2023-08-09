<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head> -->

@extends('app')

@section('content')

        <div class='flex flex-row'>
            <div class='bg-rose-800 justify-between flex flex-col fixed h-screen p-8'>
                <h1 class='text-yellow-50 font-custom text-3xl' >PawPawPaw</h1>
                <div class='flex flex-col justify-between'>
                    <h1 class='text-yellow-50'>Actualités</h1>
                    <a href='' class='text-yellow-50'>Créer un nouveau post</a>
                    <a href='/userpage'class='text-yellow-50'>Voir mon profil</a>
                </div>
                <a class="text-yellow-50" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Se déconnecter
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <div class='bg-yellow-50 text-pink-950 pl-44 p-10'>
                <h1 class="indent-20 font-bold text-xl">Actualités</h1>
                @foreach($posts as $post)
                <div class="bg-yellow-100 m-24 rounded-lg p-10 flex flex-row">
                        <img class="h-80 w-80 bg-yellow-300" src="{{$post['image_path']}}" alt="{{$post['posttitle']}}">
                        <div class="text-right align-middle">
                            <div class="flex flex-row">

                                <h3 class="text-pink-950" >{{$post['posttitle']}}</h3>
                                <p class="text-pink-950 ">{{$post['userid']}}</p>
                            </div>
                            <p>{{$post['postdescription']}}</p>
                            <p class="bottom-0 right-0 ">{{$post['created_at']}}
                        </div>
                </div>
                @endforeach
            </div>
        </div>


@endsection


