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
                <input type="text" name="title" class="form-control  {{ null!=$errors->first('title') ? 'is-invalid' : '' }}" id="__input-nombre" value="{{old("title")}}" >
                </div>
                
                <div class="form-group mb-3">
                    <label for="__input-poblacion">Rating</label>
                    <input type="text" name="rating" class="form-control  {{ null!=$errors->first('rating') ? 'is-invalid' : '' }}" id="__input-rating" placeholder="" value="{{old("rating")}}">
                </div>

                <div class="form-group mb-3">
                    <label for="__input-nombre">Fecha de estreno</label>
                    <input type="date" name="release_date" class="form-control  {{ null!=$errors->first('title') ? 'is-invalid' : '' }}" id="__input-release_date value="{{old("release_date")}}"" >
                </div>           
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar Pelicula</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
