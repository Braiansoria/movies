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


Route::get('/home', 'HomeController@index')->name('home');

Route::get("/peliculas", "PeliculasController@listado");

// Detalle pelicula

Route::get('/pelicula/{id}', 'PeliculasController@detalle');

// Agregar película
Route::get('/peliculas/agregar', function() { return view('sections.agregarPelicula'); });

Route::post('peliculas/agregar', "PeliculasController@agregar");

// Borrar pelicula
Route::post('/borrarPelicula',"PeliculasController@borrar");


// Actores y detalle

Route::get("/actores" , "ActoresController@listado");


Route::view('/adminInicio', 'adminInicio')->middleware('auth', 'validarAdmin');

Route::get('/editar/{id}', 'PeliculasController@edit');
Route::post('/editar','PeliculasController@update');
