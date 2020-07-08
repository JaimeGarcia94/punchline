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
Route::post('/config/update/email', 'ConfigController@updateEmail')->name('config.updateEmail');
Route::post('/config/update/password', 'ConfigController@updatePassword')->name('config.updatePassword');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
