<?php

use App\ExhibitionRegister;

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
Route::get('/live', 'PagesController@live');
Route::get('/', 'PagesController@home')->name('home');
Route::get('/committees', 'PagesController@committees');
Route::get('/team', 'PagesController@team');
Route::get('/welcome', 'PagesController@welcomeNote');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/speakers', 'PagesController@speakers');
Route::get('/blog', 'PagesController@blog');
Route::get('/sponsors', 'PagesController@sponsors');
Route::get('/booking', 'PagesController@booking');
Route::get('/accommodation', 'PagesController@accomodation');
Route::get('/nulistice-concept', 'PagesController@nulistice_concept');
Route::get('/reris-concept', 'PagesController@reris_concept');
Route::get('/abstract', 'PagesController@loadAbstractPage');
Route::get('/abstract/submit', 'AbstractController@create');
Route::get('/fees', 'PagesController@fees');
Route::get('download', 'PagesController@download');
Route::get('/proceedings/download', 'PagesController@downloadProceedings');
Route::get('proceedings', 'PagesController@proceedings')->name('proceedings');
Route::get('/messages', 'QueriesController@index');
Route::get('/all-abstracts', 'AbstractController@index');
Route::get('/expo-and-exhibition', 'ExhibitionController@index')->name('page.expo-exhibition');
Route::get('/expo/register', 'ExhibitionController@registerExpoView')->name('expo.register.view');
Route::get('/exhibition/register/{option}', 'ExhibitionController@registerExhibitionView')->name('exhibition.register.view');
Route::post('/expo/register', 'ExhibitionController@submitExpoRegistration')->name('expo.register');
Route::post('/exhibition/register', 'ExhibitionController@submitExhibitionRegistration')->name('exhibition.register');
Route::get('/thank-you', 'ExhibitionController@thankYou')->name('exhibition.thanks');
Route::get('live', 'ExhibitionController@live')->name('expo.live');

Route::get('/contact-us', 'QueriesController@create')->name('contact.create');
Route::post('/contact-us', 'QueriesController@store')->name('contact.store');

Route::get('/events', 'PagesController@events')->name('events');

Route::post('/replies', 'RepliesController@store')->name('reply.store');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/profile', [
        'uses' => 'AbstractController@profile',
        'as' => 'profile'
    ]);

    Route::post('/abstract/{user}', [
        'uses' => 'AbstractController@uploadAbstract',
        'as' => 'abstract.upload'
    ]);
    Route::get('/abstract/upload/{conference}', [
        'uses' => 'AbstractController@abstractUploadPage',
        'as' => 'abstract.upload.page'
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

    Route::post('/abstracts/{id}/remove', [
        'uses' => 'AbstractController@removeAbstract',
        'as' => 'abstract.remove'
    ]);

    Route::get('/submission/{id}/abstracts', [
        'uses' => 'AbstractController@abstracts',
        'as' => 'download.submission.abstracts'
    ]);
});
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    //Abstracts
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/abstracts', 'AdminController@abstracts')->name('admin.abstracts');
    Route::get('/statistics/{conference}', 'AdminController@statistics')->name('stats');
    Route::get('/abstracts/{conference}/export', 'AdminController@exportToExcel')->name('export-abstracts');

    //Expo
    Route::get('/expo', 'AdminController@expoData')->name('admin.expo');
    Route::post('/expo/{id}/approve', 'AdminController@approveExpo')->name('expo.approve');
    Route::post('/expo/{id}/decline', 'AdminController@declineExpo')->name('expo.decline');
    
    //Exhibition
    Route::get('/exhibition', 'AdminController@exhibitionData')->name('admin.exhibition');
    Route::post('/exhibition/{id}/approve', 'AdminController@approveExhibition')->name('exhibition.approve');
    Route::post('/exhibition/{id}/decline', 'AdminController@declineExhibition')->name('exhibition.decline');


    Route::group(['middleware' => ['auth']], function () {
        //General Events
        Route::get('/general-events', 'GeneralEventController@index')->name('generalEvents.index');
        Route::get('general-events/create', 'GeneralEventController@create')->name('generalEvent.create');
        Route::post('/general-events/store', 'GeneralEventController@store')->name('generalEvent.store');
        Route::get('/general-events/{id}/edit', 'GeneralEventController@edit')->name('generalEvent.edit');
        Route::patch('/general-events/{generalEvent}/update', 'GeneralEventController@update')->name('generalEvent.update');
        Route::post('/general-events/{id}/destroy', 'GeneralEventController@destroy')->name('generalEvent.destroy');

        //Nulistice Events
        Route::get('/nulistice-events', 'NulisticeEventController@index')->name('nulisticeEvents.index');
        Route::get('nulistice-events/create', 'NulisticeEventController@create')->name('nulisticeEvent.create');
        Route::get('/nulistice-events/{id}/edit', 'NulisticeEventController@edit')->name('nulisticeEvent.edit');
        //MOVED TO API
        //Route::post('/nulistice-events/store', 'NulisticeEventController@store')->name('nulisticeEvent.store');
       // Route::patch('/nulistice-events/{nulisticeEvent}/update', 'NulisticeEventController@update')->name('nulisticeEvent.update');
        Route::post('/nulistice-events/{id}/destroy', 'NulisticeEventController@destroy')->name('nulisticeEvent.destroy');

        //Reris Events
        Route::get('/reris-events', 'RerisEventController@index')->name('rerisEvents.index');
        Route::get('reris-events/create', 'RerisEventController@create')->name('rerisEvent.create');
        Route::post('/reris-events/store', 'RerisEventController@store')->name('rerisEvent.store');
        Route::get('/reris-events/{id}/edit', 'RerisEventController@edit')->name('rerisEvent.edit');
        Route::patch('/reris-events/{nulisticeEvent}/update', 'RerisEventController@update')->name('rerisEvent.update');
        Route::post('/reris-events/{id}/destroy', 'RerisEventController@destroy')->name('rerisEvent.destroy');


        //Gallery
        Route::get('/gallery/images/add', 'ImageGalleryController@add')->name('events.gallery.add');
        Route::get('/gallery/images', 'ImageGalleryController@index')->name('events.gallery');






    });
});

