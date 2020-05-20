<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Aquí es donde puede registrar rutas API para su aplicación. Estas
El | RouteServiceProvider carga las rutas dentro de un grupo que
El | se le asigna el grupo de middleware "api". ¡Disfruta creando tu API! */

//ruta llamada www.efectua.es/api/setas que ejecutar el metodo index del controlador SetasController y resultado final es un JSON
Route::get('/setas', 'SetasController@index');
//ruta llamada www.efectua.es/api/setas que ejecutar el metodo GetJuego del controlador SetasController y resultado final es un JSON
Route::get('/setas/GetJuego', 'SetasController@GetJuego');
Route::get('/setas/GetComestibles', 'SetasController@GetComestibles');
Route::get('/setas/GetToxicos', 'SetasController@GetToxicos');
Route::get('/setas/GetSeta/{id}', 'SetasController@GetSeta');


//Articulos
Route::get('/articulos', 'ArticulosController@index');

Route::post('articulos/upload', 'ArticulosController@upload');



//Juego
Route::get('/juego', 'JuegoCestoController@index');
Route::post('/juego/CrearJuego', 'JuegoCestoController@CrearJuego');
Route::post('/juego/JuegosJugador', 'JuegoCestoController@JuegosJugador');


//Ferias
Route::get('/ferias', 'FeriasController@index');

//instituciones
Route::get('/instituciones', 'InstitucionesController@index');

//recetas

Route::get('/recetas', 'RecetasController@index');

//usuarios y login
Route::post('/usuarios/agregar', 'UsuariosController@create');
Route::post('/usuarios/login', 'UsuariosController@Login');

