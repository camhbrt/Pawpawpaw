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

        <div class='flex'>
            <div class='bg-rose-800 justify-between flex flex-col fixed h-full'>
                <h1 class='text-yellow-50' >PawPawPaw</h1>
                <div class='flex flex-col '>
                    <h1 class='text-yellow-50'>Actualités</h1>
                    <h1 class='text-yellow-50'>Créer un nouveau post</h1>
                    <h1 class='text-yellow-50'>Voir mon profil</h1>
                </div>
                <div class=''>Se déconnecter</div>
            </div>
            <div class='bg-yellow-50'>
                @foreach($posts as $post)
                    <div>
                        <h3>{{$post['posttitle']}}</h3>
                        <p>{{$post['postdescription']}}</p>
                        <img src="{{$post['image_path']}}" alt="{{$post['posttitle']}}"></img>
                    </div>
                @endforeach
            </div>
        </div>


@endsection

