<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function displayPosts () {
        $posts=Post::all();
        return view('home', ['posts' => $posts]);
    }

    public function index (){
        echo "post";

    }
}
 