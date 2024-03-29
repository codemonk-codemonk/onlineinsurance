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



Route::group(['middleware' => ['auth','admin']],function(){


  Route::get('/dashboard', function () {
      return view('admin.dashboard');
  });

  Route::get('/role-register','Admin\DashboardController@registered');

  Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');

});



Route::get('/callcartc',function(){
  return view('tc.cartc');
});


Route::get('/callbiketc',function(){
  return view('tc.biketc');
});


Route::get('/callmobiletc',function(){
  return view('tc.mobiletc');
});

Route::get('/calllaptoptc',function(){
  return view('tc.laptoptc');
});


Route::get('/callidv',function(){
  return view('IDV');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/callpolicy', function () {
    return view('policy_checker');
});



Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::post('contact','ContactController@store');


Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::auth();

Route::get('/home', 'HomeController@index');


Route::post('/callregister', 'RegistraionController@store');






Route::get('/callcar', function () {
    return view('car-insurance');
});




Route::get('/callbike', function () {
    return view('bike-insurance');
});



Route::get('/callmobile', function () {
    return view('mobile-insurance');
});



Route::get('/calllaptop', function () {
    return view('laptop-insurance');
});


Route::get('/callmobileform', function () {
    return view('mobile_form');
});

Route::get('/callcarform', function () {
      return view('car_form');
});

Route::get('/callbikeform', function () {
    return view('bike_form');
});


Route::get('/calllaptopform', function () {
    return view('laptop_form');
});

Route::post('/callcarform','CarFormController@store');
Route::post('/callbikeform','BikeFormController@store');
Route::post('/callmobileform', 'MobileController@store');
Route::post('/calllaptopform', 'LaptopController@store');
