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
Route::post('post', 'PostsController@store')-> name('posts.store');  // shows the store post screen
Route::get('/post/create', 'PostsController@create')->name('posts.create')->middleware('auth');//shows the create post screen
Route::get('/post/{id}', 'PostsController@show')->name('posts.show');      //shows specific post
Route::get('/post/{id}/edit', 'PostsController@edit')->name('posts.edit')->middleware('auth'); //shows the edit post screen
Route::put('/post/{id}', 'PostsController@update');

//routes for the admin
Route::get('/users', 'UsersController@index');

//routes that came with the artisan ui. Middleware is here because this is more common than in the controller
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

