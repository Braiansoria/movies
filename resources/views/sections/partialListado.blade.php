  <div class="container">

    <div class="container-fluid bg-dark text-white p-3">
      <div class="row">
        <div class="col-md-6">
             <h1>Todas las peliculas</h1> 
    </div>
    <div class="col-md-4">
      <div class="input-group">
        <form action="/search" method="get">
        <input class="form-control" type="search" placeholder="Buscar por titulo" aria-label="Search" name="search">
      </form>
      </div>
    </div>
    </div>
    </div>

    <ul class="list-group active">

    @forelse($peliculas as $pelicula)
    
    <li class="list-group-item"><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a>
      </li>
          @empty
          <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
          @endforelse
        </ul>

      <div class="pagination justify-content-center">
        {{$peliculas->links()}}
    </div>
  </div>

