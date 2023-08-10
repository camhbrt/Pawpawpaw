<?php

use App\Http\Controllers\UsersController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PostsController::class, 'displayPosts'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/userpage', [PostsController::class, 'displayUserPosts']);
    Route::post('/createPost',[PostsController::class, 'createPost']);
    Route::get('/edit-post/{post}', [PostsController::class, 'showEditPost']);
    Route::put('/edit-post/{post}', [PostsController::class, 'updatePost']);
    Route::delete('/delete-post/{post}', [PostsController::class, 'deletePost']);
    Route::get('/user/{id}', [UsersController::class,'displayOtherUsersPosts']);

});


Route::get('/posts', [PostsController::class, 'index']);


require __DIR__.'/auth.php';
