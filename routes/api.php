<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('events/general','GeneralEventController@index');
Route::get('events/reris','RerisEventController@index');

 //Live 
 Route::post('/events/{id}/toggle-status','GeneralEventController@toggleStatus')->middleware('auth:api');
 Route::get('/events/nulistice/{status}','NulisticeEventController@index')->middleware('auth:api');
 Route::get('/events/reris/{status}','RerisEventController@index')->middleware('auth:api');
 Route::get('/events/general/{status}','GeneralEventController@index')->middleware('auth:api');
 
 //Gallery
Route::get('/events/gallery/images', 'ImageGalleryController@index');
Route::post('/events/gallery/images', 'ImageGalleryController@upload')->middleware('auth:api');

// EVENTS ADMIN
//NULISTIE
Route::get('/events/nulistice/{id}/edit', 'NulisticeEventController@edit')->middleware('auth:api');
Route::post('/events/nulistice', 'NulisticeEventController@store')->middleware('auth:api');
Route::patch('/events/nulistice/{id}', 'NulisticeEventController@update')->middleware('auth:api');

//RERIS
Route::get('/events/reris/{id}/edit', 'RerisEventController@edit')->middleware('auth:api');
Route::post('/events/reris', 'RerisEventController@store')->middleware('auth:api');
Route::patch('/events/reris/{id}', 'RerisEventController@update')->middleware('auth:api');

 