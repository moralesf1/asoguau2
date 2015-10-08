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

/* Cada uno se creará una rama y realizará Push propio en su ramas para
 * que no halla conflictos en los codigos necesitaremos un Master
 * que nos guie en los repositorios y permita los merge del
 * mismo
 */

Route::get('/', function () {
    return view('home');
});

Route::get('noticia','AuthController@index');

Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

//Route::get('login', 'LoginController@showLogin');
//Route::post('login', 'AuthController@postLogin');
//Route::post('login', 'AuthController@postLogin');

/* Rutas del Backend */

Route::get('backend', 'UsuarioController@backend');

/*
 * Estas rutas son rutas de tipos RESTFull cada una son rutas que tienen
 * los metodos necesarios para realizar el CRUD, traten de separar
 * cada rute Resource y sus metodos de elemento inactivo (si aplica)
 * y el metodo de retornar el elemento
 *
 * Se comentará cada ruta para tener un control del mismo
 * */

/*
 * Resource
 * Veterinarios Inactivos
 * Recovery de Veterinarios
 * */
Route::resource('vets', 'VeterinarioController');


/*
 * Resource
 * Usuarios Inactivos
 * Recovery de Usuarios
 * */
Route::resource('usuarios', 'UsuarioController');
Route::get('usuarios_inactivos', 'UsuarioController@inactivos');
Route::post('retorno/{id}', 'UsuarioController@activos'); //Usuarios