<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\IndexController,
    App\Http\Controllers\Post\DestroyController,
    App\Http\Controllers\Post\UpdateController,
    App\Http\Controllers\Post\EditController,
    App\Http\Controllers\Post\ShowController,
    App\Http\Controllers\Post\StoreController,
    App\Http\Controllers\Post\CreateController;

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
    return view('welcome');
});

Route::group([],function (){
    Route::get('/posts', IndexController::class)->name('post.index');
    Route::get('/posts/create', CreateController::class)->name('post.create');;
    Route::post('/posts', StoreController::class)->name('post.store');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
    Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');
});

Route::get('/posts/update', 'App\Http\Controllers\PostsController@update');
Route::get('/posts/delete', 'App\Http\Controllers\PostsController@delete');
Route::get('/posts/first_or_create', 'App\Http\Controllers\PostsController@firstOrCreate');
Route::get('/posts/update_or_create', 'App\Http\Controllers\PostsController@updateOrCreate');

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');




