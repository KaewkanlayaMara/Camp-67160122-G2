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

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/prokedexs', 'ProkedexesController@index');
    Route::get('/prokedex/{id}/edit', 'ProkedexesController@edit');
    Route::post('/prokedex', 'ProkedexesController@store');
    Route::put('/prokedex/{id}', 'ProkedexesController@update');
    Route::delete('/prokedex/{id}', 'ProkedexesController@destroy');

});


