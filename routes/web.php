<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index(Peliculas random y agregadas), listado de peliculas,

Auth::routes();

Route::get('/',"PeliculasController@inicio");

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/peliculas", "PeliculasController@listado")->middleware('auth');

Route::get("/search", "PeliculasController@search")->middleware('auth');
// Detalle pelicula

Route::get('/peliculas/{id}', 'PeliculasController@detalle')->middleware('auth');

// Agregar película

Route::post('/agregarPelicula', "PeliculasController@agregar")->middleware('auth', 'EsAdmin');

Route::get('/agregarPelicula', "PeliculasController@create")->middleware('auth', 'EsAdmin');

// Borrar y Editar pelicula  
Route::post('/borrarPelicula',"PeliculasController@borrar");

Route::get('/editar/{id}', 'PeliculasController@edit')->middleware('auth', 'EsAdmin');

Route::post('/editar', 'PeliculasController@update')->middleware('auth', 'EsAdmin');

//  

Route::get("/actores" , "ActoresController@listado");


// Rutas administrador 


Route::get("/admin/index", "AdminController@index")->middleware('auth', 'EsAdmin');

Route::get('/borrarUser/{id}',"AdminController@borrar")->middleware('auth', 'EsAdmin');

Route::post('/borrarUser',"AdminController@borrar")->middleware('auth', 'EsAdmin');

Route::get('/listado',"PeliculasController@all")->middleware('auth', 'EsAdmin');

Route::get('/detalle/{id}',"PeliculasController@edicion")->middleware('auth', 'EsAdmin');



