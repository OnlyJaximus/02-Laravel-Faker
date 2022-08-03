<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PostController::class, "index"])->name('home');
Route::get('/post/create', [PostController::class, "create"]); // view
Route::post('/post/create', [PostController::class, "store"]);

// 1 nacin
// Route::get('/post/{id}/edit', [PostController::class, "edit"]); // view
// 2 nacin route model binding
Route::get('/post/{post}/edit', [PostController::class, "edit"]);

// 1 nacin
//Route::put('/post/{id}/edit', [PostController::class, "update"]);
// 2 nacin route model binding
Route::put('/post/{post}/edit', [PostController::class, "update"]);



Route::get('/post/{id}/delete', [PostController::class, "delete"]);
Route::get('/post/{id}', [PostController::class, "show"])->name('post.single');


Route::get('/users', [UsersController::class, "index"]);
Route::get('/user/{user}', [UsersController::class, "destroy"]);
Route::get('/user/{user}/posts', [UsersController::class, "posts"]);
