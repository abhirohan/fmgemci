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
Route::post('/postupload','PostController@newPost')->name('uploadPost');
/*--------------------------------View---------------------------------*/
Route::get('/login','ViewController@loginView')->name('loginView');
Route::get('/profile','ViewController@profileView')->name('profileView');
Route::get('/signup','ViewController@signupView')->name('signupView');
Route::get('/post_list','ViewController@postListView')->name('postListView');
Route::get('/contact_us','ViewController@contactUsView')->name('contactUsView');
Route::get('/about_us','ViewController@aboutUsView')->name('aboutUsView');
