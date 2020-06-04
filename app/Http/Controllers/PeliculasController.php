<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

use App\Actor;


class PeliculasController extends Controller
{

    public function listado(Request $request){

     $peliculas = Pelicula::paginate(6);

     $vac = compact("peliculas");

    return view("sections.listadoPeliculas", $vac);

  }
public function create(){
       $peliculas = Pelicula::all();

        $vac = compact('peliculas');

        return view('sections.agregarPelicula', $vac);
    }

    
  public function agregar(Request $req){
    $reglas = [
      "title" => "required|string|min:2|unique:movies,title",
      "rating" => "required|min:0|max:10",
      "release_date" => "date|min:1|required",
      "poster" => "required|image|mimes:jpeg,jpg,png,svg,bmp,webp",
      "comentarios" => "required|min:50",
      "genero" => "required"


  ];

  $mensajes = [
      "string" => "El campo  debe ser un texto",
      "integer" => "El campo  debe ser numérico",
      "min" => "El campo  tiene un mínimo de :min caracteres",
      "unique" => "El campo  ya existe",
      "required" => "El campo no puede estar vacio",
      "image"=> "El campo no es un imagen",
      "mimes" => "El archivo tiene que ser jpeg, jpg, png, svg, bmp o webp",
      "date" => "El campo debe ser una fecha"      

  ];

  $this->validate($req, $reglas,$mensajes);

    $peliculaNueva = new Pelicula();

    $ruta = $req->file('poster')->store("public");
    $nombreArchivo = basename($ruta);
    
    $peliculaNueva->title = $req['title'];
    $peliculaNueva->rating=$req['rating'];
    $peliculaNueva->release_date=$req['release_date'];
    $peliculaNueva->comentarios=$req['comentarios'];

    $peliculaNueva->poster=$nombreArchivo;
      
    $peliculaNueva->genre_id = (int)$req["genero"];

    $peliculaNueva->actor_movie = (int)$req["actor"];

    dd($peliculaNueva);
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
  public function inicio(){


     $peliculas = Pelicula::where("title", 0)->inRandomOrder()->take(6)->get();
     $movies = Pelicula::where("title", 0)->first()->take(6)->get();
     $vac=compact('peliculas','movies');

      return view('/sections.partialRan',$vac);
      }
  
public function search(Request $Request){
  $peliculas = Pelicula::where('title', 'like', '%'.$Request->get('search').'%')
                        ->paginate(8);

  $vac = compact('peliculas');
  return view("sections.listadoPeliculas",$vac);
}
public function edit($id){

  $unaPelicula = Pelicula::find($id);
  $movies = Pelicula::all();

  return view('editar', compact('movies','unaPelicula','id'));
}
public function update(Request $request){

  $reglas = [
    "title" => "required|string|min:2|unique:movies,title",
    "rating" => "required|integer|min:0|max:10",
    "release_date" => "date|min:1|required",
    "poster" => "required|image|mimes:jpeg,jpg,png,svg,bmp,webp",
    "comentarios" => "required|min:50",
    "genero" => "required"


];

$mensajes = [
  "string" => "El campo  debe ser un texto",
  "integer" => "El campo  debe ser numérico",
  "min" => "El campo  tiene un mínimo de :min caracteres",
  "unique" => "El campo  ya existe",
  "required" => "El campo no puede estar vacio",
  "image"=> "El campo no es un imagen",
  "mimes" => "El archivo tiene que ser jpeg, jpg, png, svg, bmp o webp",
  "date" => "El campo debe ser una fecha" ,
     


];

$this->validate($request, $reglas,$mensajes);

  $unaPelicula = Pelicula::find($request->input('id'));
  $unaPelicula->title = $request->input('title');
  $unaPelicula->rating = $request->input('rating');
  $unaPelicula->release_date = $request->input('release_date');
  $unaPelicula->comentarios=$request['comentarios'];
  
  $ruta = $request->file('poster')->store("public");
  $nombreArchivo = basename($ruta);

  $unaPelicula->poster = $nombreArchivo; 

  $unaPelicula->genre_id = (int)$request["genero"];
  
  $unaPelicula->save();


   return redirect('/listado');
  }



// Controlladores admin//



public function all(Request $request){

  $peliculas = Pelicula::paginate(5);

  $vac = compact("peliculas");

 return view("sections.listado", $vac);
}
public function edicion($id)
  {
    $unaPelicula = Pelicula::find($id);

    $vac = compact("unaPelicula");

    return view('sections.detalle', $vac);

  }


 // Api controller//

public function listadoAPI(){
  $peliculas = Pelicula::all();

  return json_encode($peliculas);
}

}