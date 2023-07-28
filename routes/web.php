<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuramoController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/index', 'App\Http\Controllers\PuramoController@index')->name('index')->middleware('auth');

Route::get('/create', 'App\Http\Controllers\PuramoController@create')->name('create')->middleware('auth');

Route::post('/index', 'App\Http\Controllers\PuramoController@store')->name('store')->middleware('auth');

Route::get('/detail/{id}', 'App\Http\Controllers\PuramoController@detail')->name('detail');

Route::delete('/index/{puramo}', 'App\Http\Controllers\PuramoController@destroy')->name('destroy');

Route::post('/home', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');