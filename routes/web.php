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
        Route::put('{id}', ['uses' => 'AnimesController@update', 'as' => 'animes.update']);
    });

    // Categories

    Route::group(['prefix' => 'categories'], function(){
        Route::get('', ['uses' => 'CategoriesController@allCategories', 'as' => 'categories.all']);
        Route::get('create', ['uses' => 'CategoriesController@create', 'as' => 'categories.create']);
        Route::post('', ['uses' => 'CategoriesController@store', 'as' => 'categories.store']);
        Route::delete('delete/{id}', ['uses' => 'CategoriesController@delete', 'as' => 'categories.delete']);
    });

    // Episodes


});
