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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


//Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    /*Route::resources([
        'events' => 'Event\EventController',
        'committeeDetails' => 'Event\CommitteeDetailController',
        'eventThemeDetails' => 'Event\EventThemDetailController',
        'hostDetails' => 'Event\HostDetailController',
        'imageDetails' => 'Event\ImageDetailController',
        'locationDetails' => 'Event\LocationDetailController',
        'registrationPayments' => 'Event\RegistrationPaymentController',
        'speakers' => 'Event\SpeakerController',
    ]);*/


//});

Route::get('/events/create-step1', 'Event\EventController@createStep1');
Route::post('/events/create-step1', 'Event\EventController@postCreateStep1')->name('event-store-step1');

Route::get('/events/create-step2', 'Event\EventController@createStep2');
Route::post('/events/create-step2', 'Event\EventController@postCreateStep2')->name('event-store-step2');

Route::get('/events/create-step3', 'Event\EventController@createStep3');
Route::post('/events/create-step3', 'Event\EventController@postCreateStep3')->name('event-store-step3');


Route::get('/events/create-step4', 'Event\EventController@createStep4');
Route::post('/events/create-step4', 'Event\EventController@postCreateStep4')->name('event-store-step4');


Route::get('/events/create-step5', 'Event\EventController@createStep5');
Route::post('/events/store', 'Event\EventController@storeAllDatesEvent')->name('events.store');