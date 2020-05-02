
@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
<div class="container">
<section class="container" id="detalles">
<div class="row detalle"> 
    <div class="col-lg-12 primero">
        <img class="img-fluid fotoDetalle" src="/storage/{{ $unaPelicula->poster }}" alt="{{ $unaPelicula->title }}">
        <p>Rating: {{ $unaPelicula->rating }}</p>
        <p>Fecha de estreno: {{ $unaPelicula->release_date }}</p>  
        <form class="" action="/borrarPelicula" method="POST">
            {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$unaPelicula->id}}">
        <input type="submit" value="Borra Pelicula">
        <a href="/editar/{{$unaPelicula->id}}" class="btn btn-success" tabindex="-1" role="button">Editar</a>
        @if ($unaPelicula->genero)
         <p>Genero:{{$unaPelicula->genero->name}}</p>
         @endif
    </form>     
     </div>
    <div class="col-lg-4"> 
   </div>
  
  </div>
</section>
</div>
@endsection
