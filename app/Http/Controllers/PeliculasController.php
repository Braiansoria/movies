<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{
    public function listado(){
      $peliculas = Pelicula::all();

        $vac = compact("peliculas");

        return view("sections.listadoPeliculas", $vac);
    }
}
