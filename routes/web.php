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

Route::get('/home','PagesController@home');
Route::get('/schedule', 'PagesController@schedule');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/speakers', 'PagesController@speakers');
Route::get('/blog', 'PagesController@blog');
Route::get('/sponsors', 'PagesController@sponsors');
Route::get('/', 'PagesController@home');
Route::get('/booking', 'PagesController@booking');
