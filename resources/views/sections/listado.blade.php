@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection

@section('principal')

@forelse($peliculas as $pelicula)

<div class="container">
  
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      {{$pelicula->title}}
    <button class="btn btn-primary badge-pill "><a class="text-white" href="/detalle/{{$pelicula->id}}">Detalle</a>
      </button>
    </li>
  </ul>
</div>
  @empty
  <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
 @endforelse
 <div class="pagination justify-content-center">
  {{$peliculas->links()}}
</div>

@endsection
