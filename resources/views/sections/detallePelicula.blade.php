
@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
<div class="container">
    <div class="jumbotron jumbotron-fluid text-center">
        <h1 class="display-4">{{$unaPelicula->title}}</h1>
        <p>Rating: {{ $unaPelicula->rating }}</p>
        <td>
            <a href="/editar/{{$unaPelicula->id}}" class="btn btn-primary">
                <button type="submit" class="btn btn-success">Editar</button>
            </a>
        </td>
        <form action="/borrarPelicula" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$unaPelicula->id}}">
        <input type="submit" value="Borra Pelicula">
        @if ($unaPelicula->genero)
         <p>Genero:{{$unaPelicula->genero->name}}</p>
         @endif
        </div>
      </div>
</div>
 
  @endsection
