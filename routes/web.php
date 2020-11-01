<?php

use App\Http\Controllers\UsersController;
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
//routes for the post actions Middleware is here because it's easy to see where auth is required
Route::get('/post', 'PostsController@index')->name('overview');           //shows all posts
Route::post('post', 'PostsController@store')-> name('posts.store');  // shows the store post screen
Route::get('/post/create', 'PostsController@create')->name('posts.create')->middleware('auth');//shows the create post screen
Route::get('/post/{id}', 'PostsController@show')->name('posts.show');      //shows specific post
Route::get('/post/{id}/edit', 'PostsController@edit')->name('posts.edit')->middleware('auth'); //shows the edit post screen
Route::put('/post/{id}', 'PostsController@update');

Route::post('/home', 'UsersController@activePost')->name('home');

//routes for the admin
Route::get('/users', 'UsersController@index');

//routes for the user
Route::get('/users/{id}', 'UsersController@show')->name('users.show');
Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
Route::put('/users/{id}', 'UsersController@update');


//routes that came with the artisan ui. Middleware is here because it's easy to see where auth is required
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

