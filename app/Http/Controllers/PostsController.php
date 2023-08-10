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

    public function goToCreatePostPage(){
        return view('createPost');
    }

    public function createPost(Request $request){


        $validatedData=$request->validate([
            'posttitle'=> ['required'],
            'postdescription'=>['required'],
            'image_path'=>['required'],
        ]);

        if($request->hasFile('image_path')){
            $destinationPath='/pictures';
            $file=$request->file('image_path');
            $uploadedImage=$file->getClientOriginalName();
            
            // $imagePath=$request->image_path->store('pictures');
            $imagePath= $file->storeAs($destinationPath, $uploadedImage);
            
            $validatedData['posttitle']=strip_tags($validatedData['posttitle']);
            $validatedData['postdescription']=strip_tags($validatedData['postdescription']);
            $validatedData['userid'] = auth()->id();
            $validatedData['image_path']=$imagePath;

        Post::create($validatedData);

        return redirect('/home')->with('Post créé');
        }
        else
            return response()->json(["message"=>"ce que je veux"]);

        

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
            'image'=>['max:4096']
        ]);
    
        $destionationPath='pictures';
        $uploadedImage=$request()->image->getClientOriginalName();
        dd($uploadedImage);
        // $imagePath=$request->image->move(public_path($destinationPath), $uploadedImage);
        // $validatedData['posttitle']=strip_tags($validatedData['posttitle']);
        // $validatedData['postdescription']=strip_tags($validatedData['postdescription']);
        // $validatedData['userid'] = auth()->id();
        // $validatedData['image']=$imagePath;
    
        // $post->update($validatedData);
    
        // return redirect('/home')->with('Post modifié');

    }

    public function deletePost (Post $post){
        $post->delete();
        return redirect('/home');
    }

    
    public function user() {
        return $this->belongsTo(User::class, 'userid');
    }
}
 