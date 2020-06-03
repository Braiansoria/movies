
@section('principal')


@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
<div class="container">
    <div class="jumbotron jumbotron-fluid text-center detalles">
        <h1 class="display-4">{{$unaPelicula->title}}</h1>
        <div>
        <img class="detalle" src="/storage/{{$unaPelicula->poster}}" alt="" >
        </div>
        <h3> Detalle de la pelicula
        <p  class="text-justify descripcion" style="margin: 30px"> {{$unaPelicula->comentarios}}</p>
       </h3>
        <p>Rating: {{ $unaPelicula->rating }}</p>
        @if ($unaPelicula->genero)
        <p>Genero:{{$unaPelicula->genero->name}}</p>
        @endif
        @foreach ($unaPelicula->actores as $actor)
        <small>
        <li>{{$actor->getNombreCompleto()}}
        </small>
        </li>
        @endforeach
    </div>
    

</div>


 
  @endsection


