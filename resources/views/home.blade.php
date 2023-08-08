<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action='/createPost' method='POST'>
        @csrf
        <input name='posttitle' type='text' placeholder="title">
        <textarea name='postdescription' type='text' placeholder="description"></textarea>
        <button>Create Post</button>
    
    </form>

    <div>
        @foreach($posts as $post)
            <div>
                <h3>{{$post['posttitle']}}</h3>
                <p>{{$post['postdescription']}}</p>
                <img src="{{$post['image_path']}}" alt="{{$post['posttitle']}}"></img>
            </div>
        @endforeach
        
    </div>



    
</body>

</html>