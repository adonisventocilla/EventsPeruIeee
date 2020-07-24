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

Route::get('/', 'WelcomeController@index')->name('index');

Auth::routes();

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::middleware(['auth'])->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('persona/{user}', 'User\UserController@createPersonData')->name('register.create');
    Route::post('persona', 'User\UserController@storePersonData')->name('register.store');

    Route::resources([
        'committeeDetails'     => 'Event\CommitteeDetailController',
        'eventThemeDetails'    => 'Event\EventThemeDetailController',
        'hostDetails'          => 'Event\HostDetailController',
        'imageDetails'         => 'Event\ImageDetailController',
        'locationDetails'      => 'Event\LocationDetailController',
        'registrationPayments' => 'Event\RegistrationPaymentController',
        'speakers'             => 'Event\SpeakerController',
    ]);

    Route::post('registrationPayments/Registration/{registration}','Event\EegistrationPaymentController@updateRegistration')->name('registrationPayments.updateRegistration');

    Route::resource('attendances', 'Attend\AttendController')->except(['create', 'store']);

    Route::resource('events', 'Event\EventController')->except(['show']);
    Route::put('events/publish/{event}','Event\EventController@publish')->name('events.publish');
    Route::post('/checkout', 'Attend\PaymentsController@process');

    Route::get('home/active','HomeController@activeEvents')->name('events.active');
    Route::get('home/dashboard/{event}','HomeController@dashboard')->name('events.dashboard');
    Route::get('home/my-events/', 'HomeController@myevents')->name('events.my-events');


    Route::middleware(['person.data'])->group(function(){
        Route::post('attendances', 'Attend\AttendController@store')->name('attendances.store');
        Route::get('attendances/create/{event}', 'Attend\AttendController@create')->name('attendances.create');
    });

    Route::post('/payment/process', 'Attend\PaymentsController@process')->name('payment.process');

    Route::get('confirmations', 'ConfirmationController@show')->name('confirmations.show');
    Route::post('confirmations', 'ConfirmationController@store')->name('confirmations.store');
});


Route::get('events/{event}', 'Event\EventController@show')->name('events.show');

// Routes for admin only
Route::get('/dashboard', 'Admin\DashboardController@index');
Route::get('/comites', 'Admin\DashboardController@table');
// End Routes for admin only
