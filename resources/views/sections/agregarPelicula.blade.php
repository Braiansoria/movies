@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')
<div id="agregar">
<div class="container text-white">
    <div class="py-5 text-center" >
        <h2>Agregar Pelicula</h2>
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
            <form method="post" action="/peliculas/agregar" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                    <label for="__input-nombre">Titulos</label>
                <input type="text" name="title" class="form-control" id="__input-nombre" value="{{old("title")}}" >
                </div>
                
                <div class="form-group mb-3">
                    <label for="__input-poblacion">Rating</label>
                    <input type="text" name="rating" class="form-control" id="__input-poblacion" placeholder="" value="{{old("rating")}}">
                </div>

                <div class="form-group mb-3">
                    <label for="__input-nombre">Fecha de estreno</label>
                    <input type="date" name="release_date" class="form-control" id="__input-nombre value="{{old("release_date")}}"" >
                </div>           
                <div class="form-group">
                    <label for="__input-bandera">Cargar poster</label>
                    <input type="file" name="poster" class="form-control-file" id="__input-bandera">
                </div> 
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar Pelicula</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection