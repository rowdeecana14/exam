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
// Route::prefix('/user')->group(function() {
//     Route::get('/list', 'UserController@list')->name('user.list');
//     Route::get('/create', 'UserController@create')->name('user.create');
//     Route::post('/store', 'UserController@store')->name('user.store');
//     Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
//     Route::put('/update/{id}', 'UserController@update')->name('user.update');
//     Route::post('/remove/{id}', 'UserController@remove')->name('user.remove');
// });

Route::prefix('/contact')->group(function() {
    Route::get('/list', 'ContactController@list')->name('contact.list');
    Route::post('/store', 'ContactController@store')->name('contact.store');
    Route::get('/edit/{id}', 'ContactController@edit')->name('contact.edit');
    Route::put('/update/{id}', 'ContactController@update')->name('contact.update');
    Route::post('/destroy/{id}', 'ContactController@destroy')->name('contact.destroy');
});