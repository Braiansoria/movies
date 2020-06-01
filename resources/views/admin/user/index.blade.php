@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection

@section('principal')

<style>
    table{
        background-color: beige;
        margin-top: 20px;
    }
</style>

<div class="container">
<table class="table table-dark">
    ">
    <tr>
        <th scope="col">Email</th>
        <th scope="col">Usuario</th>
        <th scope="col">Id</th>

      </tr>

      @foreach ($users as $user)
          
      <tr>
        <td>{{$user->email}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->id}}</td>
        <td>
        <a href="/admin/edit/{{$user->id}}" class="btn btn-warning">Editar</a>
        </td>
        <td>
            <form action="/borrarUser" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="submit" value="Borrar">
        </td>
      </tr>
      @endforeach

    </table>
    <div class="pagination justify-content-center">
        {{$users->links()}}
    </div>
</div>

@endsection

