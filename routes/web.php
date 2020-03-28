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

Route::get('/posts', 'PostController@index')->name('post.index');

Route::get('/posts/create' , 'PostController@create')->name('post.create');

Route::post('/posts' ,'PostController@store')->name('post.store');

Route::delete('/posts/{post}' , 'PostController@destroy')->name('post.destroy');   

Route::get('/posts/{post}', 'PostController@show')->name('post.show');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
