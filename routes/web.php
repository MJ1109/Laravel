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

Route::get('/home', function () {
    return view('welcome');
});

route::get('/about-us', 'AboutController@show')->name('about');
route::get('news', 'ItemController@index') ->name('news');

route::get('news/create', 'ItemController@create')->name('news.create');
route::post('news/store', 'ItemController@store')-> name('news.store');
route::get('news/{id}', 'ItemController@show')->name('news.show');

route::get('details', 'DetailsController@show')->name('details');

//Route::get('details', 'DetailsController@show')->name('details');
