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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@getProfile')->name('users');

Route::get('/users/add', 'HomeController@addUser')->name('adduser');

Route::get('/users/edit/{uid}', 'UserMgmtController@showEditUser')->name('showEditUser');
Route::post('/users/edit', 'UserMgmtController@doEditUser')->name('doEditUser');
