<div class="container">
    <div class="row caja">
@forelse($peliculas as $pelicula)
      <div class="col-md-2">
        <div class="card mb-2">
          <img class="card-img-top"
          src="/storage/{{$pelicula->poster}}" alt="Card image cap">
          <div class="card-body text-center">
            <button type="button" class="btn btn-primary btn-block"><a class="text-white" href="/peliculas/{{$pelicula->id}}">VerMas</button>
            </div>
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

 