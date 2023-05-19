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

Route::get('/','App\Http\Controllers\MainController@index');
Route::get('/container','App\Http\Controllers\MainController@container');
Route::get('/sinevyr','App\Http\Controllers\MainController@sinevyr');
Route::get('/shypit','App\Http\Controllers\MainController@shypit');
Route::get('/skies','App\Http\Controllers\MainController@skies');
Route::get('/skansen','App\Http\Controllers\MainController@skansen');
Route::get('/comments','App\Http\Controllers\MainController@comments');

Route::get('/laba_get','App\Http\Controllers\MainController@laba_get');
Route::get('/laba_post','App\Http\Controllers\MainController@laba_post');
Route::post('/laba_post','App\Http\Controllers\MainController@store');
Route::get('/users', 'App\Http\Controllers\MainController@users');

