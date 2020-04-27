@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
    

<div class="container">

    <h1>Mis Peliculas</h1>
    
    <ul>
      @forelse ($peliculas as $pelicula)
          <li>
          <p>{{$pelicula->title}}</p>
          @unless ($pelicula->rating < 8)
          <p>EXCELENTE</p>
          @endunless
          </li>
      @empty
        <p>No hay peliculas</p>
      @endforelse
    </ul>
    </div>

    
@endsection    
   

