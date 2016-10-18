<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin/painel'], function() {

    // Animes
    Route::group(['prefix' => 'animes'], function (){
        Route::get('', ['uses' => 'AnimesController@index', 'as' => 'animes.index']);
        Route::get('create', ['uses' => 'AnimesController@create', 'as' => 'animes.create']);
        Route::post('store', ['uses' => 'AnimesController@store', 'as' => 'animes.store']);
        Route::get('edit/{id}', ['uses' => 'AnimesController@edit', 'as' => 'animes.edit']);
        Route::put('', ['uses' => 'AnimesController@update', 'as' => 'animes.update']);
    });

    // Episodes


});
