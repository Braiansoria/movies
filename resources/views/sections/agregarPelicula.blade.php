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
            
            <form method="post" action="/agregarPelicula" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                    <label>Titulos</label>
                <input type="text" name="title" class="form-control  {{ null!=$errors->first('title') ? 'is-invalid' : '' }}" id="__input-nombre" value="{{old("title")}}" >
                <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('title')}}</span>
                </div>
                
                <div class="form-group mb-3">
                    <label >Rating</label>
                    <input type="text" name="rating" class="form-control  {{ null!=$errors->first('rating') ? 'is-invalid' : '' }}" id="__input-rating" placeholder="" value="{{old("rating")}}">
                    <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('rating')}}</span>

                </div>

                <div class="form-group mb-3">
                    <label for="__input-nombre">Fecha de estreno</label>
                    <input type="date" name="release_date" class="form-control  {{ null!=$errors->first('title') ? 'is-invalid' : '' }}" id="__input-release_date value="vale={{old("release_date")}}"" >
                    <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('release_date')}}</span>

                </div>  
                <div class="form-group mb-3">
                    <label >Detalle de una pelicula</label>
                    <textarea name="comentarios" cols="30" rows="10" class="form-control" value="{{old('comentario')}}" placeholder="Agrega una descripción "> </textarea>
                    <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('comentarios')}}</span>
                </div>  
                <div class="form-group mb-3">
                    <label for="poster">Foto
                        <input type="file" name="poster" class="form-control">
                        <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('poster')}}</span>
                    </label>
                </div>
                
                <div class="form-group">
                    <label for="provincia">Generos</label>
                        <select class="form-control {{ null!=$errors->first('genero') ? 'is-invalid' : '' }}" name="genero">
                            <option value="">Eliege el genero</option>
                            @foreach ($peliculas as $pelicula)
                            @if ($pelicula->genero)
                            <option value="{{$pelicula->genre_id}}">
                                {{$pelicula->genero->name}}
                            @endif
                            @endforeach
                            </select>
                        <span  class="form-text text-danger">{{$errors->first('genero')}}</span>
                    </div>

                  <div class="form-group">
                    <label for="provincia">Actores</label>
                        <select class="form-control {{ null!=$errors->first('actor') ? 'is-invalid' : '' }}" name="actor">
                            <option value="">Eliege el actor</option>
                            
                            </select>
                        <span  class="form-text text-danger">{{$errors->first('actor')}}</span>
                    </div>
                    
                <div style="padding: 15px">     
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar Pelicula</button>
                </div> 
            </form>
        </div>
    </div>
</div>
</div>
@endsection
