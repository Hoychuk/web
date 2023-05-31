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

Route::get('/users', 'App\Http\Controllers\UserController@user')->name('users.user');
Route::get('/posts', 'App\Http\Controllers\PostController@post')->name('posts.post');
Route::get('/roles', 'App\Http\Controllers\RoleController@role')->name('roles.role');
Route::get('/laba_6', 'App\Http\Controllers\MainController@laba_6');


