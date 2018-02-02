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



Route::get('/', 'FrontController@index');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/reviews', 'FrontController@reviews');
Route::get('/reviews', 'FrontController@reviews');
Route::get('/admin', 'FrontController@admin');

Route::resource('usuario', 'UsuarioController');

//Route::get('movie', 'MovieController');


