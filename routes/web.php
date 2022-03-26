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

Route::get('/posts/{post}', function($slug){
    $path=__DIR__."/../resources/posts/{$slug}.html";
    if(!file_exists($path)){
        // dd('file not exits');
        // ddd('file not exits');
        return redirect('/');
    }
    $posts=file_get_contents($path);
    return $posts;
})->where('post','[a-zA-z_/-]+');