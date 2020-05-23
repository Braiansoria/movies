
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
        <small class="form-control contrainer fluid" rows="3" >{{$unaPelicula->comentarios}}
        </small>
       </h3>
       <td>
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
       </td>
       
        <td>
            <a href="/editar/{{$unaPelicula->id}}" class="btn btn-primary">
                <button type="submit" class="btn btn-success">Editar</button>
            </a>
        </td>
        <form action="/borrarPelicula" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$unaPelicula->id}}">
        <input type="submit" value="Borra Pelicula">
        </div>
      </div>
</div>


 
  @endsection
