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
 
 //Gallery
Route::get('/events/gallery/images', 'ImageGalleryController@index');
Route::post('/events/gallery/images', 'ImageGalleryController@upload')->middleware('auth:api');;

 