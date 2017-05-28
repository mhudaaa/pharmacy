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

Route::get('/', function () {
    return view('splash');
});

// Name
Route::get('/name', function () {
    return view('add-name');
});
Route::post('/name/set', 'PharmacyController@setName');


Route::get('/avatar', function () {
    return view('choose-avatar');
});
Route::get('/spin', function () {
    return view('spin-wheel');
});
Route::get('/play', 'PharmacyController@play');
Route::get('/home', 'PharmacyController@home');

// Order
Route::get('/orders', 'PharmacyController@getOrders');
Route::post('/orders/set', 'PharmacyController@setOrder');

// Forecast
Route::get('/forecast/{id_medicine}', 'PharmacyController@getForecast');
Route::post('/forecast/set/{id_medicine}', 'PharmacyController@setForecast');

// Restock
// Route::get('/restock/{id_medicine}', 'PharmacyController@getRestock');
Route::post('/restock/set/{id_medicine}', 'PharmacyController@setRestock');


Route::get('/checkout', 'PharmacyController@checkout');
Route::get('/gameover', 'PharmacyController@gameover');
Route::get('/congrats', 'PharmacyController@congrats');


// Route::get('/orders', 'PharmacyController@start');
// Route::get('/orders-2', 'PharmacyController@start');
// Route::post('/orders/insert', 'PharmacyController@insert');