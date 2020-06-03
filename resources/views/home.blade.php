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
    @if (Auth::user()->email == "braiansoria1@sdfg.com" )
    <h4>Que deseas hacer?</h4>
    <br>
    <a href="/admin/index"> Ver el listado de usuarios</a>
    <br>
    <a href="/listado">Ver el listado de peliculas</a>
    <br>
    <button type="submit" class="btn btn-success">
      <a class="text-white" href="/agregarPelicula">Agregar nueva pelicula</a></button>
      <br>
      @endif
    <div style="font-size: 10px;">
      <h4 class="display-4 text-center" style="font-size: 30px;">Accede al listado de peliculas! → <a class="a-iconos" href="/peliculas"><i class=" icono-facebook mb-5"><i class="fas fa-film"></i></i></a></h4>
      </div>

<!-- Mi perfil -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
   Mi perfil
</button>

<!-- Modal -->
<div class="modal fade text-center" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <h2>{{Auth::user()->name}}</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
  </div>
@endsection

