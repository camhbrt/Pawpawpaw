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

    public function displayUserPosts(){
        $posts=[];
        $posts = auth()->user()->userPosts()->latest()->get();
        return view('userpage', ['posts' => $posts]);
    }

    public function showEditPost(Post $post){
        return view('edit-post', ['post' => $post]);
    }

    public function updatePost(Post $post, Request $request) {
        $validatedData=$request->validate([
            'posttitle'=> ['required'],
            'postdescription'=>['required'],
            'imagePath'=>['required']
        ]);
    
    
        $validatedData['posttitle']=strip_tags($validatedData['posttitle']);
        $validatedData['postdescription']=strip_tags($validatedData['postdescription']);
        // $validatedData['userid'] = auth()->id();
    
        $post->update($validatedData);
    
        return redirect('/home')->with('Post modifié');

    }

    public function deletePost (Post $post){
        $post->delete();
        return redirect('/home');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
 