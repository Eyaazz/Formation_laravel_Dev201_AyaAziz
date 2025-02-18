<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/about','about');

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/posts/{id}' ,  function($id) {
    return $id; }); //send data in URL

Route::get('/posts/{id}/{post}' ,  function($id,$post) {
    return "$id $post"; }); 

Route::get('/layout',function(){
    return view('layout');
});

Route::get('/show', function () {
    $posts = [
        1 => ['title' => 'Laravel'],
        2 => ['title' => 'PHP']
    ];
        
    return view('posts.show', ['data' => $posts]); 
});


Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/show',[HomeCOntroller::class, 'blog'])->name('blog');


Route::get('/show/{id}/{book?}', [HomeController::class, 'blog'])->name('blog');





