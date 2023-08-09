@extends('app')

@section('content')

    <div class='flex flex-row'>
        
        {{-- Sidebar --}}
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


        <div class="pl-80 pt-10 pr-10 pb-10">

            {{-- Profile section --}}
            <div class="flex">
                <img src="/pictures/avatar.jpg" alt="" class="h-40 rounded-full">
                <div class="flex flex-col px-10">
                    <p class="text-3xl pb-4 text-rose-800 font-custom2">{{ auth()->user()->name }}</p>
                    <p class="text-sm text-rose-800 px-4 mx-6 border-l-2 border-rose-800">Biographie ghruiehguishdh gskfhgjkhaergheuiqhfqkdhfqrf hqurhfuqiofoiqejfioqejvfsi jfioj iofj ioqfj iofj ioqfj iof iaofjr iaofjrioghieroghio hfiqo aoifh io </p>
                </div>
            </div>

            {{-- Posts section --}}
            <div class="">
                @foreach($posts as $post)
                <div class="bg-yellow-100 m-24 rounded-xl p-10">
                    <h3 class="text-pink-950">{{$post['posttitle']}}</h3>
                    <p>{{$post['postdescription']}}</p>
                    <img class="h-80" src="{{$post['image_path']}}" alt="{{$post['posttitle']}}">
                    
                    <div class="flex justify-evenly">
                        <a class="bg-red-500 text-yellow-50 rounded-xl px-1 border border-red-500 hover:bg-yellow-50 hover:text-red-500" href="/edit-post/{{$post->id}}">Edit post</a>
                        <form action="/delete-post/{{$post->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-yellow-50 rounded-xl px-1 border border-red-500 hover:bg-yellow-50 hover:text-red-500">X Delete post</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
    @endsection
        