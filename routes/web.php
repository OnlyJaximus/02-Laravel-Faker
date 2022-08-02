<?php

use App\Http\Controllers\PostController;
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
