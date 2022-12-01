<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
    use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) { // use wildcard to look for post URL
    // Find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+'); // constraints => allows letters in URL
