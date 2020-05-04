<section id="__seccion-listado-banderas">
  <div class="container">
    @forelse($peliculas as $pelicula)
      <div class="row">
        <ul class="list-group">
            <li class="list-group-item active">{{ $pelicula->title }}<a href="/pelicula/{{ $pelicula->id }}">
            </li>
          </ul>
          @empty
          <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!(</h2>
      @endforelse
              <h2 class="mt-5 w-100 text-center">¡No se encontraron peliculas!(</h2>
          @endforelse
      </div>
      <div class="pagination justify-content-center">
      {{ $peliculas->links() }}
    </div>
  </div>
</div>
</section>