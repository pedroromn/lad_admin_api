<?php



// Vista Auth.login : inicio del sistema
Route::get('/', 'AuthController@getLogin'); // home
Route::post('login', 'AuthController@postLogin'); // ruta para procesar el inicio de sesión




Route::group(array('before' => 'auth'), function() {


	Route::get('dashboard', 'AuthController@getDashboard');



    Route::get('projects', 'ProjectController@index');
    Route::get('logout', 'AuthController@getLogout');
    Route::resource('project', 'ProjectController');

});

















//API REST
Route::group(array('prefix' => 'api'), function(){
        Route::get('projects', 'ApiProjectController@index');
        Route::get('projects/{id}', 'ApiProjectController@show');
});
