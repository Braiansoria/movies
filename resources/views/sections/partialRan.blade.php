@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
    

<div class="container">


    <div class="jumbotron "style="margin-top:25px">
        <h1 class="display-4 text-center">Accede al listado de peliculas! → <a class="a-iconos" href="/peliculas"><i class=" icono-facebook mb-5"><i class="fas fa-film"></i></i></a>
        </h1>
        <div class="row mb-5">                                                    
            <div class="col">
              @forelse($peliculas as $pelicula)
               <div class="card flex-md-row mb-4 shadow-sm h-md-250 ">
                  <div class="card-body d-flex flex-column align-items-center">
                     <strong class="d-inline-block mb-2 text-primary">{{$pelicula->title}}</strong>
                     <h6 class="mb-0">
                        <a class="text-dark" href="/peliculas/{{$pelicula->id}}">Detalle</a>
                     </h6>
                    <img class="card-img-rio d-none d-lg-block" alt="Thumbnail [200x250]" src="/storage/{{$pelicula->poster}}" style="width: 200px; height: 250px;">
               </div>
            </div>
  @empty
   <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
  @endforelse
  </div>
  
  </div>
  
      </div>

      <div>
          
      </div>
    
@endsection    