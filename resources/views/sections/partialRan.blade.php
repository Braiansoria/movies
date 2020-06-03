@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
    

<div class="container">


    <div class="jumbotron center-block "style="margin-top:25px">
        <h1 class="display-4 text-center">Accede al listado de peliculas! → <a class="a-iconos" href="/peliculas"><i class=" icono-facebook mb-5"><i class="fas fa-film"></i></i></a>
        </h1>
        <div class="row caja">
          <h3 class="mt-5 w-100 text-center">Peliculas aleatorias</h3>
            @forelse($peliculas as $pelicula)
                  <div class="col-md-2">
                    <div class="card mb-2">
                      <img class="card-img-top" src="/storage/{{$pelicula->poster}}" alt="Card image cap"><a class="btn btn-dark text-center" href="/peliculas/{{$pelicula->id}}">Detalle</a>
                    </div>
                  </div>
                
            
                  @empty
                  <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
                 @endforelse


          <h3 class="mt-5 w-100  text-center">Peliculas agregadas recientemente</h3>

                 @forelse($movies as $movie)
                 <div class="col-md-2">
                   <div class="card mb-2">
                     <img class="card-img-top" src="/storage/{{$movie->poster}}" alt="Card image cap"><a class="btn btn-dark text-center" href="/peliculas/{{$movie->id}}">Detalle</a>
                   </div>
                 </div>
               
           
                 @empty
                 <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
                @endforelse
                 
                </div>
  
</div>
</div>

    
@endsection    