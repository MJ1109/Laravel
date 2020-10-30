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
//routes for the post actions
Route::get('/post', 'PostsController@index')->name('overview');           //shows all posts
Route::get('/post/create', 'PostsController@create')->name('post.create');//shows the create post screen
Route::get('/post/{id}', 'PostsController@show')->name('post.show');      //shows specific post
Route::get('/post/{id}/edit', 'PostsController@edit')->name('post.edit'); //shows the edit post screen
Route::post('post/store', 'PostsController@store')-> name('post.store');  // shows the store post screen
//update route still misses

//routes that came with the artisan ui. Middleware is here because this is more common than in the controller
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

