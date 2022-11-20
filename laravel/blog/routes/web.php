<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Fetch all posts and pass it to a view home page
    $posts = Post::all();
    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) { // use wildcard to look for post URL
    // Find a post by its slug and pass it to a view called "post"
    $post = Post::find($slug);
    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_\-]+'); // constraints => allows letters in URL
