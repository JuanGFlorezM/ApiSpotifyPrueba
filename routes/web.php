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

/*Route::get('/', function () {
    return view('lanzamientos');
});*/

Route::get('/', 'SpotifyController@lanzamientos');

Route::get('lanzamientos', 'SpotifyController@lanzamientos');

Route::get('artistas/{id}', 'SpotifyController@artistas');

Route::get('canciones/{id}', 'SpotifyController@canciones');
