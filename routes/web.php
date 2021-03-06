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

//route panel home
Route::get('/home', 'HomeController@index')->name('home');

//route profile
Route::get('/perfil', 'UserController@profile')->name('perfil');

//route user
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');

//route configuration user
Route::get('/configuration', 'ConfigController@configuration')->name('configuration');
Route::post('/config/update/email', 'ConfigController@updateEmail')->name('config.updateEmail');
Route::post('/config/update/password', 'ConfigController@updatePassword')->name('config.updatePassword');

//route contact
Route::get('/contact', 'ContactController@confirmEmailContact')->name('confirmEmailContact');
Route::post('/contact/send/info', 'ContactController@sendInfoContact')->name('contact.sendInfo');

//route page music beats
Route::get('/beats', 'MusicController@index')->name('beats');
Route::post('/beats/insert', 'MusicController@insertBeat')->name('beats.insert');
Route::get('/beats/{filename}', 'EasyModeController@getMusic')->name('beat.show');

//route game easy mode
Route::get('/easyMode', 'EasyModeController@index')->name('easyMode');

//route game images
Route::get('/imagesMode', 'ImagesController@index')->name('imagesMode');

//route game images and word
Route::get('/randomMode', 'RandomModeController@index')->name('randomMode');

//route game extreme mode
Route::get('/extremeMode', 'ExtremeModeController@index')->name('extremeMode');

//route game history mode
Route::get('/historyMode', 'HistoryModeController@index')->name('historyMode');

//route game crossFire mode
Route::get('/crossFireMode', 'CrossFireModeController@index')->name('crossFireMode');

//route game terminations mode
Route::get('/terminationMode', 'TerminationModeController@index')->name('terminationMode');
