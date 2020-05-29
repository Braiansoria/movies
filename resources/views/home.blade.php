@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')



  <div class="jumbotron jumbotron-fluid text-center" style="margin-top:25px;">
    <div class="container">
        <h1 class="display-4">Movies</h1>
        <p class="lead">Bienvenido/a<br>
            {{Auth::user()->name}}</p>
    </div>
    <div style="font-size: 10px;">
      <h4 class="display-4 text-center" style="font-size: 30px;">Accede al listado de peliculas! → <a class="a-iconos" href="/peliculas"><i class=" icono-facebook mb-5"><i class="fas fa-film"></i></i></a></h4>
      </div>
  </div>
@endsection

