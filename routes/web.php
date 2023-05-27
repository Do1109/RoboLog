<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuramoController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', 'App\Http\Controllers\PuramoController@index')->name('index');

Route::get('/create', 'App\Http\Controllers\PuramoController@create')->name('create')->middleware('auth');

Route::post('/index', 'App\Http\Controllers\PuramoController@store')->name('store')->middleware('auth');

Route::post('/create', 'App\Http\Controllers\Auth\LoginController@dologout')->name('logout');

Route::get('/showImage', 'App\Http\Controllers\PuramoController@showImage')->name('showImage');