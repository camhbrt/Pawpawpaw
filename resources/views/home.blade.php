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
                <div class="flex flex-row">
                    <svg height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 48.839 48.839" xml:space="preserve" style="transform: rotate(-45deg);">
                        <g>
                            <path style="fill:#fefce8;" d="M39.041,36.843c2.054,3.234,3.022,4.951,3.022,6.742c0,3.537-2.627,5.252-6.166,5.252
                                c-1.56,0-2.567-0.002-5.112-1.326c0,0-1.649-1.509-5.508-1.354c-3.895-0.154-5.545,1.373-5.545,1.373
                                c-2.545,1.323-3.516,1.309-5.074,1.309c-3.539,0-6.168-1.713-6.168-5.252c0-1.791,0.971-3.506,3.024-6.742
                                c0,0,3.881-6.445,7.244-9.477c2.43-2.188,5.973-2.18,5.973-2.18h1.093v-0.001c0,0,3.698-0.009,5.976,2.181
                                C35.059,30.51,39.041,36.844,39.041,36.843z M16.631,20.878c3.7,0,6.699-4.674,6.699-10.439S20.331,0,16.631,0
                                S9.932,4.674,9.932,10.439S12.931,20.878,16.631,20.878z M10.211,30.988c2.727-1.259,3.349-5.723,1.388-9.971
                                s-5.761-6.672-8.488-5.414s-3.348,5.723-1.388,9.971C3.684,29.822,7.484,32.245,10.211,30.988z M32.206,20.878
                                c3.7,0,6.7-4.674,6.7-10.439S35.906,0,32.206,0s-6.699,4.674-6.699,10.439C25.507,16.204,28.506,20.878,32.206,20.878z
                                M45.727,15.602c-2.728-1.259-6.527,1.165-8.488,5.414s-1.339,8.713,1.389,9.972c2.728,1.258,6.527-1.166,8.488-5.414
                                S48.455,16.861,45.727,15.602z"/>
                        </g>
                    </svg>

                    <h1 class='text-yellow-50 font-custom text-3xl pl-2' >PawPawPaw</h1>
                </div>
                <div class='flex flex-col justify-between'>
                    <a href='/home' class='text-yellow-50 py-4 hover:text-orange-300'>Actualités</a>
                    <a href='/createPost' class='text-yellow-50 py-4 hover:text-orange-300'>Créer un nouveau post</a>
                    <a href='/userpage' class='text-yellow-50 py-4 hover:text-orange-300'>Voir mon profil</a>
                </div>
                <a class="text-yellow-50 hover:text-orange-300" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Se déconnecter
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>


            <div class='bg-yellow-50 text-pink-950 pl-80 pt-10 pr-10 pb-10'>
                <h1 class="indent-20 font-bold text-xl">Actualités</h1>
                
                @foreach($posts as $post)
                <div class="bg-yellow-100 m-24 rounded-xl p-10 flex flex-row">
                        <img class="h-80 w-80 bg-yellow-300 rounded-lg flex-none" src="{{$post['image_path']}}" alt="{{$post['posttitle']}}">
                        <div class="pl-10 grow justify-between">
                            <div class="flex flex-row justify-between text-pink-950">
                                <h3>{{$post['posttitle']}}</h3>
                                <p>{{$post['userid']}}</p>
                            </div>
                            <p class="">{{$post['postdescription']}}</p>
                            <p class="bottom-0 right-0 ">créé le {{$post['created_at']}} </p>
                        </div>
                </div>
                @endforeach
            </div>
        </div>


@endsection


