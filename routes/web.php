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
    return view('auth.login');
});

// Route::get('/login-','SectionsController@loadLogin')->name('login');
// Route::get('/register-','SectionsController@loadRegister')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
