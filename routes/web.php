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

Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blogs')->name('blg');
Route::get('/formation', 'HomeController@formations')->name('frm');
Route::get('/coaching', 'HomeController@coachings')->name('coach');
Route::get('/consulting', 'HomeController@consultings')->name('consul');
Route::get('/evenementiel', 'HomeController@evenementiels')->name('even');
Route::get('/about', 'HomeController@abouts')->name('ab');
Route::get('/contact', 'HomeController@contacts')->name('cont');


Route::post('/download_ebook','InfoController@ebooks')->name('ebok');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
