@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection


@section('principal')



  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Movies</h1>
        <p class="lead">Bienvenide<br>
            {{Auth::user()->name}}</p>
    </div>
  </div>
@endsection

