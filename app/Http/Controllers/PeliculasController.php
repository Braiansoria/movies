<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{
    public function listado(){
      $peliculas = Pelicula::paginate(8);

        $vac = compact("peliculas");

        return view("sections.listadoPeliculas", $vac);
    }
  public function agregar(Request $req){
    $reglas = [
      "title" => "string|min:2|unique:movies,title",
      "rating" => "numeric|min:0|max:10",
      "release_date" => "date|min:1",
      "poster" => "file"
  ];

  $mensajes = [
      "string" => "El campo :attribute debe ser un texto",
      "integer" => "El campo :attribute debe ser numérico",
      "min" => "El campo :attribute tiene un mínimo de :min caracteres",
      "unique" => "El campo :attribute ya existe"
  ];

  $this->validate($req, $reglas,$mensajes);

    $peliculaNueva = new Pelicula();
    
    $ruta=$req->file("poster")->store("public");
    $nombreArchivo = basename($ruta);

    $peliculaNueva->poster = $nombreArchivo;
    $peliculaNueva->title=$req['title'];
    $peliculaNueva->rating=$req['rating'];
    $peliculaNueva->release_date=$req['release_date'];
      
    $peliculaNueva->save();

    return redirect("/peliculas");
  }

  public function detalle($id)
  {
    $unaPelicula = Pelicula::find($id);

    $vac = compact("unaPelicula");

    return view('sections.detallePelicula', $vac);
  }
  public function borrar(Request $formulario ){
   $id = $formulario['id'];

   $pelicula = Pelicula::find($id);

   $pelicula->delete();
   return redirect("/peliculas");
  }
  
  }