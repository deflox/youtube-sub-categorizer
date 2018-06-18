<?php

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

Auth::routes();

Route::get('/', 'HomeController@index');

// API
Route::get('/api/categories', 'CategoriesController@categories');
Route::get('/api/feed/{categoryId}', 'FeedController@feed');
Route::post('/api/add/channel/{categoryId}', 'ChannelController@add');