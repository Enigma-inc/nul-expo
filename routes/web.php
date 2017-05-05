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

Auth::routes();
Route::get('/', 'PagesController@home');
Route::get('/schedule', 'PagesController@schedule');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/speakers', 'PagesController@speakers');
Route::get('/blog', 'PagesController@blog');
Route::get('/sponsors', 'PagesController@sponsors');
Route::get('/booking', 'PagesController@booking');
Route::get('/accommodation', 'PagesController@accomodation');
Route::get('/conference', 'PagesController@conference');
Route::get('/abstract', 'PagesController@loadAbstractPage');
Route::get('/abstract/submit', 'AbstractController@create');
Route::get('/fees', 'PagesController@fees');
Route::get('download', 'PagesController@download');
Route::get('/messages', 'QueriesController@index');

Route::get('/contact-us','QueriesController@create')->name('contact.create');;
Route::post('/contact-us', 'QueriesController@store')->name('contact.store');



Route::group(['middleware' => 'auth'], function () {

    Route::get('/profile', [
        'uses'=>'AbstractController@index',
        'as'=>'profile'
    ]);

    Route::post('/abstract/{user}', [
        'uses'=>'AbstractController@uploadAbstract',
        'as'=>'abstract.upload'
    ]);
    
    Route::post('/submit-details', [
        'uses' => 'AbstractController@submitSpeakerDetails',
        'as' => 'submit.speaker.details'
    ]);

    Route::post('/profile/{user}/edit', [
        'uses' => 'AbstractController@enableEditProfile',
        'as' => 'enable.profile.edit'
    ]);

    Route::post('/download/abstract', [
        'uses' => 'AbstractController@downloadAbstract',
        'as' => 'abstract.download'
    ]);
});

