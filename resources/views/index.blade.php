  <!------------------ SECCION NAV  ----------------- -->

@extends('tamplate.leyout')

 @section('css')
     {{ asset('css/style.css') }}
 @endsection

@section('principal')

  <!------------------ SECCION PRINCIPAL  ----------------- -->

@include('sections.listadoPeliculas')
  
  
   
  <!--------------SECCION FOOTER------------------------------->
  
  <div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <footer>
              <div class="social d-flex flex-wrap">
                <div class="mision col-12 row justify-content-center">
                  
                </div>
                
                <div id="contacto" class="contacto mt-5 col-md-6">
                  <h3>Contanos tu experiencia</h3>
                  <form action="/contacto" method="POST" id="formuMensaje">
                    @csrf
                    <div class="form-group" id="email-group">
                      <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Email..." name="email" value="{{old('email')}}">
                      
                    </div>
                    @error('email')
                      <div class="alert alert-success"> <strong>{{$message}}</strong></div>                        
                    @enderror
                    
                    <div class="form-group" id="comentario-group">
                      <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control @error('mensaje') is-invalid @enderror" id="comentario" rows="5" placeholder="Mensaje..." name="mensaje">{{old('mensaje')}}</textarea>
                      
                    </div>
                    @error('mensaje')
                      <div class="alert alert-danger"> <strong>{{$message}}</strong></div>                        
                    @enderror
                    <button type="submit" class="btn btn-info btn-block">Enviar</button>
                  </form>
                </div>
              <!-- ICONOS DE RED SOCIAL !-->
                <div class="red-social mt-5 col-md-6">
                  <a class="a-iconos" href="#"><i class="fab fa-facebook-f icono-facebook mb-4"></i></a>
                  <a class="a-iconos" href="#"><i class="fab fa-instagram mb-4"></i></a>
                  <a class="a-iconos" href="#"><i class="fab fa-twitter mb-4"></i></a> 
                </div>
              </div>  
          </div>
    </div>
    
  </div>
  
  

@endsection

