<div class="container my-3 py-5 text-center">
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

        <div class="row mb-5">
          <div class="col">
            @forelse($peliculas as $pelicula)
             <div class="card flex-md-row mb-4 shadow-sm h-md-250 ">
                <div class="card-body d-flex flex-column align-items-center">
                   <strong class="d-inline-block mb-2 text-primary">{{$pelicula->title}}</strong>
                   <h6 class="mb-0">
                      <a class="text-dark" href="/peliculas/{{$pelicula->id}}">Detalle</a>
                   </h6>
                  <img class="card-img-rio d-none d-lg-block" alt="Thumbnail [200x250]" src="/storage/{{$pelicula->poster}}" style="width: 200px; height: 250px;">ght flex-aut
             </div>
          </div>


@empty
 <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!</h2>
@endforelse
</div>

</div>

<div class="pagination justify-content-center">
  {{$peliculas->links()}}
</div>




