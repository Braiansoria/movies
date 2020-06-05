
@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
<div class="container">
    <div class="jumbotron jumbotron-fluid text-center">
        <h1 class="display-4">{{$unaPelicula->title}}</h1>
        <div>
        <img src="/storage/{{$unaPelicula->poster}}" alt="">
        </div>
        <h3> Detalle de la pelicula
            <p  class="text-justify descripcion" style="margin: 30px"> {{$unaPelicula->comentarios}}</p>
        </h3>
       <td>
        <p>Rating: {{ $unaPelicula->rating }}</p>
        @if ($unaPelicula->genero)
        <p>Genero:{{$unaPelicula->genero->name}}</p>
        @endif

         <!-- Actores -->
         
        <?php /*@foreach ($unaPelicula->actores as $actor)
        <small>
        <li>{{$actor->getNombreCompleto()}}
        </small>
        </li>
        @endforeach
        */--->
        ?>


       </td>
       <div>
         <button type="submit" class="btn btn-success"><a class="text-white" href="/editar/{{$unaPelicula->id}}">Editar</a>
        </button>
        <form action="/borrarPelicula" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$unaPelicula->id}}">
        <input type="submit" value="Borra Pelicula">
        </div>
    </div>
      </div>


 
  @endsection
