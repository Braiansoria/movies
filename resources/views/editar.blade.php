@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
<div id="agregar">   
<div class="container text-white">
    <div class="py-5 text-center" >
    <h2>Editar {{$unaPelicula->title}}</h2>
    </div>
    
    <div class="row ">
        <div class="col-md-8 offset-md-2 order-md-1">
            <ul class="errores">
             @foreach ($errors->all() as $error)
                <li>
                 {{$error}}
                </li>
             @endforeach
            </ul>
        <form action="/editar" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$unaPelicula->id}}">
            <div class="form-group mb-3">
                    <label>Titulo</label>
                <input type="text" name="title" class="form-control" value="{{$unaPelicula->title}}" >
                </div>
                
                <div class="form-group mb-3">
                    <label>Rating</label>
                    <input type="number" name="rating" class="form-control" value="{{$unaPelicula->rating}}" >
                </div>
                <div class="form-group mb-8">
                    <label>Detalle de pelicula</label>
                    <textarea name="comentarios" cols="30" rows="10" class="form-control" value="{{$unaPelicula->comentarios}}"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label >Fecha de estreno</label>
                    <input type="date" name="release_date" class="form-control" value="{{old('release_date',$unaPelicula->release_date)}}" >
                </div>         
                <div class="form-group mb-3">
                    <label >Imagen</label>
                    <input type="file" name="poster" class="form-control" value ="{{old('poster',$unaPelicula->poster)}}" >
                <button class="btn btn-primary btn-lg btn-block">Actualizar</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
