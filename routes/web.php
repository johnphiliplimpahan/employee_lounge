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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile','PagesController@profile');
    Route::post('/personal-information','ProfilesController@personal_information_store');
    Route::post('/contact-information','ProfilesController@contact_information_store');
    Route::post('/work-information','ProfilesController@work_information_store');
    Route::post('/location-information','ProfilesController@location_information_store');
    Route::post('/profile-image','ProfilesController@profile_image_store');
});
