@extends('tamplate.leyout')

@section('css')
    {{ asset('css/style.css') }}
    
@endsection

@section('principal')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      
                    <h2 class="w-100 text-center mt-5">¡{{ Auth::user()->name }}, bienvenide<h2>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
