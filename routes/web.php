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

route::get('/about-us', 'AboutController@show')->name('about');
route::get('news', 'NewsItemController@index') ->name('news');
route::get('news/create', 'NewsItemController@create')->name('news.create');
route::post('news/store', 'NewsItemController@store')-> name('news.store');
route::get('news/{id}', 'NewsItemController@show')->name('news.show');

//Route::get('details', 'DetailsController@show')->name('details');
