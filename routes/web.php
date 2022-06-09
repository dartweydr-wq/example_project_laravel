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
    return view('welcome');
});

Route::get('/posts', 'App\Http\Controllers\PostsController@index')->name('post.index');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create')->name('post.create');;

Route::post('/posts', 'App\Http\Controllers\PostsController@store')->name('post.store');
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostsController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'App\Http\Controllers\PostsController@update')->name('post.update');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostsController@destroy')->name('post.delete');

Route::get('/posts/update', 'App\Http\Controllers\PostsController@update');
Route::get('/posts/delete', 'App\Http\Controllers\PostsController@delete');
Route::get('/posts/first_or_create', 'App\Http\Controllers\PostsController@firstOrCreate');
Route::get('/posts/update_or_create', 'App\Http\Controllers\PostsController@updateOrCreate');

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');




