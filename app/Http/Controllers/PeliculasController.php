<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{

    public function listado(Request $request){

     $peliculas = Pelicula::paginate(6);

     $vac = compact("peliculas");

    return view("sections.listadoPeliculas", $vac);

  }

    
  public function agregar(Request $req){
    $reglas = [
      "title" => "required|string|min:2|unique:movies,title",
      "rating" => "required|numeric|min:0|max:10",
      "release_date" => "date|min:1|required",
      "poster" => "file|required",
      "comentarios" => "required|min:50",

  ];

  $mensajes = [
      "string" => "El campo :attribute debe ser un texto",
      "integer" => "El campo :attribute debe ser numérico",
      "min" => "El campo :attribute tiene un mínimo de :min caracteres",
      "unique" => "El campo :attribute ya existe",
      "required" => "El campo :attribute es obligatorio"

  ];

  $this->validate($req, $reglas,$mensajes);

    $peliculaNueva = new Pelicula();

    $ruta = $req->file('poster')->store("public");
    $nombreArchivo = basename($ruta);
    
    $peliculaNueva->title = $req['title'];
    $peliculaNueva->rating=$req['rating'];
    $peliculaNueva->release_date=$req['release_date'];
    $peliculaNueva->comentarios=$req['comentario'];

    $peliculaNueva->poster=$nombreArchivo;
      
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


     $peliculas = Pelicula::where("title", 0)->inRandomOrder()->take(3)->get();
     $vac=compact('peliculas');

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


  return view('editar', compact('unaPelicula','id'));
}
public function update(Request $request){

  $reglas = [
    "title" => "required|string|min:2",
    "rating" => "numeric|min:0|max:10",
    "release_date" => "required|date|min:1",
    "poster" => "required"

];

$mensajes = [
    "string" => "El campo :attribute debe ser un texto",
    "integer" => "El campo :attribute debe ser numérico",
    "min" => "El campo :attribute tiene un mínimo de :min caracteres",
    "unique" => "El campo :attribute ya existe",
    "required" => "El campo :attribute es obligatorio"

];

$this->validate($request, $reglas,$mensajes);

  $unaPelicula = Pelicula::find($request->input('id'));
  $unaPelicula->title = $request->input('title');
  $unaPelicula->rating = $request->input('rating');
  $unaPelicula->release_date = $request->input('release_date');
  $unaPelicula->comentarios=$request['comentario'];
  
  $ruta = $request->file('poster')->store("public");
  $nombreArchivo = basename($ruta);

  $unaPelicula->poster = $nombreArchivo; 

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