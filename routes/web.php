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
    return view('home', ['title' => 'HOME']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'ABOUT']);
});

Route::get('/posts', function () {
    return view('posts', 
    [
        'title' => 'BLOG',
        'posts' => Post::all(),
    ]);
});

Route::get('/posts/{slug}', function($slug){

    return view('posts', [
        "title" => "Single Post",
        "post" => Post::find($slug)
        ]);

});