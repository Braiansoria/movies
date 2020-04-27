@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
    

<div class="container">

    <h1>Actores</h1>
    
    <ul>
      @forelse ($actores as $actor)
          <li>
          {{$actor->getNombreCompleto()}}
          </li>
      @empty
        <p>No hay actor</p>
      @endforelse
    </ul>
    </div>

    
@endsection    
   
