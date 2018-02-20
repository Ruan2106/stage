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

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Route::get('articles', 'ArticlesController@index');

// ID Wordt van database meegestuurd naar de Show functie controller //
Route::get('articles/{id}', 'ArticlesController@show');
Route::get('articles/create', 'ArticlesController@create');




