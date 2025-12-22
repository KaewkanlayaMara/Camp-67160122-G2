<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('view2', function () {
    return view('myview2');
});

Route::get('/user', [App\Http\Controllers\user::class, 'index']);
Route::post('/user', [App\Http\Controllers\user::class, 'store']);

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/flights', 'FlightController@index');
    Route::get('flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
});


