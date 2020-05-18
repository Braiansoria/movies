<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{

    public function listado(Request $request){

     $peliculas = Pelicula::paginate(5);

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
  public function inicio(){


     $peliculas = Pelicula::where("title", 0)->inRandomOrder()->take(3)->get();
     $vac=compact('peliculas');

      return view('/sections.partialRan',$vac);
      }
  
public function search(Request $Request){
  $peliculas = Pelicula::where('title', 'like', '%'.$request->get('search').'%')
                        ->paginate(8);
  $vac = compact('peliculas');
  return view("sections.listadoPeliculas",$vac);
}
public function edit($id){

  $unaPelicula = Pelicula::find($id);


  return view('editar', compact('unaPelicula','id'));
}
public function update(Request $request){
  $unaPelicula = Pelicula::find($request->input('id'));
  $unaPelicula->title = $request->input('title');
  $unaPelicula->rating = $request->input('rating');
  $unaPelicula->release_date = $request->input('release_date');
  $unaPelicula->save();


    return redirect('/peliculas');

  
  }


 // Api controller//

public function listadoAPI(){
  $peliculas = Pelicula::all();

  return json_encode($peliculas);
}

}