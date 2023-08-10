<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function displayOtherUsersPosts($id){
        
        $user = User::findOrFail($id);
        $posts = $user->userPosts()->latest()->get();

        return view('otherusers', compact('user', 'posts'));
        
    }
}
