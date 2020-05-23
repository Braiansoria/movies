@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection

@section('principal')

@forelse($peliculas as $pelicula)

<ul class="list-group">
<li class="list-group-item">{{$pelicula->title}}</li>
  </ul>
  @empty
  <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
 @endforelse

 <div class="pagination justify-content-center">
    {{$peliculas->links()}}
  </div>
  

@endsection
