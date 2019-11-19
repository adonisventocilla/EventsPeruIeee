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
Route::get('events/{event}', 'Event\EventController@show')->name('events.show');


Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resources([
        'committeeDetails' => 'Event\CommitteeDetailController',
        'eventThemeDetails' => 'Event\EventThemeDetailController',
        'hostDetails' => 'Event\HostDetailController',
        'imageDetails' => 'Event\ImageDetailController',
        'locationDetails' => 'Event\LocationDetailController',
        'registrationPayments' => 'Event\RegistrationPaymentController',
        'speakers' => 'Event\SpeakerController',
    ]);

    Route::resource('events', 'Event\EventController')->except(['show']);
    
    Route::get('attendances/{event}', 'Attend\AttendController@create')->name('attendances.create');
    Route::resource('attendances', 'Attend\AttendController')->except(['create']);

    Route::get('confirmations', 'ConfirmationController@show')->name('confirmations.show');
    Route::post('confirmations', 'ConfirmationController@store')->name('confirmations.store');
});

