<?php



// Vista Auth.login : inicio del sistema
Route::get('/', 'AuthController@getLogin'); // home
Route::post('login', 'AuthController@postLogin'); // ruta para procesar el inicio de sesión
Route::get('about', 'AuthController@getAbout'); // vista del acerca de




Route::group(array('before' => 'auth'), function() {


    Route::get('logout', 'AuthController@getLogout');

    Route::post('projects/destroy', 'ProjectController@postDestroy'); // Ruta para procesar el borrado de un proyecto


    Route::resource('project', 'ProjectController');
    /*

    GET         /project                    index        project.index         lista de proyectos
    GET         /project/create             create       project.create        vista del formulario para crear un proyecto
    POST        /project                    store        project.store         proceso de crear un proyecto
    GET         /project/{project}          show         project.show          vista de detalle de un proyecto
    GET         /project/{project}/edit     edit         project.edit          vista del formulario de edición de un proyecto    
    PUT/PATCH   /project/{project}          update       project.update        proceso de edición de un proyecto
    DELETE      /project/{project}          destroy      project.destroy       eliminación de un proyecto


    */

  

});




//API REST
Route::group(array('prefix' => 'api'), function(){
        Route::get('projects', 'ApiProjectController@index');
        Route::get('projects/{id}', 'ApiProjectController@show');
});
