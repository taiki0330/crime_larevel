<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GenreController::class, 'genre'])
    ->name('home');

Route::get('/genres/{id}', [GenreController::class, 'show'])
    ->name('genres.show')
    ->where('id', '[0-9]+');

Route::get('/genres/{genre_id}/posts/{post_id}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('genre_id', '[0-9]+');

Route::get('/genres/{id}/create', [PostController::class, 'create'])
    ->name('posts.create')
    ->where('id', '[0-9]+');

Route::post('/genres/{id}/store', [PostController::class, 'store'])
    ->name('posts.store')
    ->where('id', '[0-9]+');

Route::get('/genres/{genre_id}/posts/{post_id}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('genre_id', '[0-9]+');

Route::patch('/genres/{genre_id}/posts/{post_id}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('genre_id', '[0-9]+');

Route::delete('/genres/{genre_id}/posts/{post_id}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('genre_id', '[0-9]+');
