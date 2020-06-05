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
           
        <form action="/editar" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$unaPelicula->id}}">
            <div class="form-group mb-3">
                    <label>Titulo</label>
                <input type="text" name="title" class="form-control" value="{{$unaPelicula->title}}">
                <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('title')}}</span>
                </div>
                
                <div class="form-group mb-3">
                    <label>Rating</label>
                    <input type="number" name="rating" class="form-control" value="{{$unaPelicula->rating}}" >
                    <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('rating')}}</span>

                </div>
                <div class="form-group mb-8">
                    <label>Detalle de pelicula</label>
                    <textarea name="comentarios" cols="30" rows="10" class="form-control" value="{{$unaPelicula->comentarios}}"></textarea>
                    <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('comentarios')}}</span>

                </div>

                <div class="form-group mb-3">
                    <label >Fecha de estreno</label>
                    <input type="date" name="release_date" class="form-control" value="{{old('release_date',$unaPelicula->release_date)}}" >
                    <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('release_date')}}</span>

                </div>  
                <div class="form-group">
                    <label for="">Generos</label>
                        <select class="form-control {{ null!=$errors->first('genero') ? 'is-invalid' : '' }}" name="genero">
                            <option value="">Eliege el genero</option>
                            @foreach ($movies as $pelicula)
                            @if ($pelicula->genero)
                            <option value="{{$pelicula->genre_id}}">
                                {{$pelicula->genero->name}}
                            @endif
                            @endforeach
                            </select>
                        <span  class="form-text text-danger">{{$errors->first('genero')}}</span>
                    </div>   
                        
                <div class="form-group mb-3">
                    <label >Imagen</label>
                    <input type="file" name="poster" class="form-control" value ="{{old('poster',$unaPelicula->poster)}}" >
                    <span id="span-nombre" class="form-text text-danger invalid-fedback">{{$errors->first('poster')}}</span>
                <button class="btn btn-primary btn-lg btn-block">Actualizar</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
