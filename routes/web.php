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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/article', 'ArticleController@index')->name('article');
Route::get('/video', 'VideoController@index')->name('video');
Route::resource('/user', 'UserController');
Route::get('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
