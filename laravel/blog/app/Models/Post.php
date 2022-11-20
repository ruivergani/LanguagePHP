<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{
    // Methods
    public static function find($slug){
        $path = resource_path("posts/{$slug}.html");  // path to the resource folder
        if (!file_exists($path)) {
            //ddd('File does not exists'); // die, dump and debug
            //abort(404); not found page
            throw new ModelNotFoundException(); // built-in class
        }
        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
    public static function all(){
        $files = File::files(resource_path("posts/")); // anything you want to do with a file you can use this class
        return array_map(fn ($file) => $file->getContents(), $files);
    }
}
