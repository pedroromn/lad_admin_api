<?php

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');

Route::group(array('before' => 'auth'), function() {
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function() {
        return View::make('project_list');
    });
    Route::get('logout', 'AuthController@getLogout');
    Route::resource('project', 'ProjectController');
});
//API
Route::group(array('prefix' => 'api'), function(){
        Route::get('projects', 'ApiProjectController@index');
        Route::get('projects/{id}', 'ApiProjectController@show');
});
