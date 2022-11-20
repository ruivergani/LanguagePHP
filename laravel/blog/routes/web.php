<?php

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
    return view('posts');
});

Route::get('posts/{post}', function ($slug) { // use wildcard to look for post URL
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    // POST does not exist
    if (!file_exists($path)) {
        //ddd('File does not exists'); // die, dump and debug
        //abort(404); not found page
        return redirect('/');
    }

    // cache the post
    $post = cache()->remember("posts.{$slug}", 3600, function () use ($path){ // cache for an hour
        var_dump('file_get_contents'); // show info about the cache variable
        return file_get_contents($path);
    });


    return view('post', [
        'post' => $post
    ]);

})->where('post', '[A-z_\-]+'); // constraints, means only allows letters in URL
