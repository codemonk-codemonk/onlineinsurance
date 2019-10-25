<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/callcar', function () {
    return view('car-insurance');
});

Route::get('/callcarform', function () {
    return view('car_form');
});


Route::get('/callbike', function () {
    return view('bike-insurance');
});

Route::get('/callbikeform', function () {
    return view('bike_form');
});


Route::get('/callmobile', function () {
    return view('mobile-insurance');
});

Route::get('/callmobileform', function () {
    return view('mobile_form');
});

Route::get('/calllaptop', function () {
    return view('laptop-insurance');
});

Route::get('/calllaptopform', function () {
    return view('laptop_form');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::post('contact','ContactController@store');
Route::post('/callcarform','CarFormController@store');
Route::post('/callbikeform','BikeFormController@store');


/*Route::resource('contactus','ContactusController');*/

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::auth();

Route::get('/home', 'HomeController@index');




Route::post('/callregister', 'RegistraionController@store');
Route::post('/callmobileform', 'MobileController@store');
Route::post('/calllaptopform', 'LaptopController@store');
