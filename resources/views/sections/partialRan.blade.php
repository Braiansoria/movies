@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
    

<div class="container">

    <h1>Peliculas</h1>

    
    <ul class="list-group">
        @forelse ($peliculas as $pelicula)
    <li class="list-group-item"><a href="/pelicula/{{$pelicula->id}}">{{$pelicula->title}}</a> </li>
        @empty
        <p>No hay actor</p>
      @endforelse
      </ul>
@endsection    
   