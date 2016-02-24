<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index', 'middleware' => 'auth']);

    Route::post('/save', ['as' => 'save.changes', 'uses' => 'HomeController@saveChanges', 'middleware' => 'auth']);

	Route::get('/login', ['as' => 'getLogin', 'uses' => 'AuthController@login']);
	Route::post('/login', ['as' => 'postLogin', 'uses' => 'AuthController@postLogin']);

	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
});
