<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function displayPosts () {
        $posts=Post::latest()->get();
        return view('home', ['posts' => $posts]);
    }

public function createPost(Request $request){
    $validatedData=$request->validate([
        'posttitle'=> ['required'],
        'postdescription'=>['required']
    ]);


    $validatedData['posttitle']=strip_tags($validatedData['posttitle']);
	$validatedData['postdescription']=strip_tags($validatedData['postdescription']);
	$validatedData['userid'] = auth()->id();

    Post::create($validatedData);

    return redirect('/home')->with('Post créé');

}

    public function index (){
        echo "post";

    }

    // public function displayUserPosts(){
    //     $posts=[];
    //     $posts = Post::where('userid',auth()->id())->get();
    //     return view('userpage', ['posts' => $posts]);
    // }
}
 