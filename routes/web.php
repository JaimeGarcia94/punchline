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
Route::get('/perfil', 'UserController@profile')->name('perfil');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/configuration', 'ConfigController@configuration')->name('configuration');
Route::post('/config/update', 'ConfigController@update')->name('config.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
