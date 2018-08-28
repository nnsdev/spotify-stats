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

Route::get('/', 'SpotifyController@index');
Route::get('/callback', 'SpotifyController@callback');

Route::group(['middleware' => 'token'], function () {
    Route::get('/dashboard', 'SpotifyController@dashboard');
    Route::get('playlist/create/{term}', 'SpotifyController@createPlaylist');

    Route::get('/logout', function () {
        \Session::forget('\token');
        return view('logout');
    });
});