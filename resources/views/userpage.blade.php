<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($posts as $post)
            <div>
                <h3>{{$post['posttitle']}}</h3>
                <p>{{$post['postdescription']}}</p>
                <img src="{{$post['image_path']}}" alt="{{$post['posttitle']}}"></img>

                <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                <p>{{ $post->id }}</p> 
		        <form action="/delete-post/{{$post->id}}" method="POST">
			        @csrf
			        @method('DELETE')
			    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>