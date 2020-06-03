<div class="container">
<div class="col-md-4">
  <form class="form-inline" action="/search" method="get">
  <div class="form-group">
  <input class="form-control" type="search" name="search" placeholder="Buscar por titulo">
  <button class="btn btn-primary" href="/search">Buscar</button>
</div>
</form>
</div>
</div>


<div class="row caja">
  @forelse($peliculas as $pelicula)
        <div class="col-md-2">
          <div class="card mb-2">
            <img class="card-img-top" src="/storage/{{$pelicula->poster}}" alt="Card image cap"><a class="btn btn-dark text-center" href="/peliculas/{{$pelicula->id}}">Detalle</a>
          </div>
        </div>
    
        @empty
        <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
       @endforelse
       
       
       
      </div>
    </div>
    <div class="container">
    <div class="pagination justify-content-center">
      {{$peliculas->links()}}
  </div>
  </div>
  








   
 