<section id="__seccion-listado-banderas">
  <div class="container">
      <div class="row">

          @forelse($peliculas as $pelicula)
              <div class="col-6 col-lg-4 col-xl-3 mb-5">
                  <div class="card __card-pelicula">
                      <a href="/pelicula/{{ $pelicula->id }}">
                        <img class="card-img-top" src="/storage/{{ $pelicula->poster }}">
                        <div class="card-body text-center">
                              <h4 class="card-title ">{{ $pelicula->title }}</h4>
                          </div>
                      </a>
                  </div>
              </div>
          @empty
              <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!(</h2>
          @endforelse
      </div>
      <div class="pagination justify-content-center">
      {{ $peliculas->links() }}
    </div>
  </div>
</div>
</section>