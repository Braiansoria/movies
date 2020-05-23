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

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/search", "PeliculasController@search");
// Detalle pelicula

Route::get('/peliculas/{id}', 'PeliculasController@detalle');

// Agregar película

Route::post('/agregarPelicula', "PeliculasController@agregar");

Route::get('/agregarPelicula', function() { return view('sections.agregarPelicula'); });

// Borrar y Editar pelicula  
Route::post('/borrarPelicula',"PeliculasController@borrar");

Route::get('/editar/{id}', 'PeliculasController@edit');

Route::post('/editar', 'PeliculasController@update');

//  

Route::get("/actores" , "ActoresController@listado");


// Rutas administrador 


Route::get("/admin/index", "AdminController@index")->middleware('auth', 'EsAdmin');

Route::get('/borrarUser/{id}',"AdminController@borrar")->middleware('auth', 'EsAdmin');

Route::post('/borrarUser',"AdminController@borrar")->middleware('auth', 'EsAdmin');

Route::get('/listado',"PeliculasController@all")->middleware('auth', 'EsAdmin');


