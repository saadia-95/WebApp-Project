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

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/discover', 'DiscoverController@index')->name('discover');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/song', 'SongController@index')->name('song');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::resource('update', 'UpdateController');

Route::post('updateRole', 'AdminController@saveRoleType');

Route::post('uploadSong', 'AdminController@uploadSong');

Route::post('deleteSong', 'AdminController@deleteSong');