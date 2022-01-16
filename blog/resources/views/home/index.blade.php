@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <h1 class="text-center">Index</h1>

    <div class="container">
        <div class="row m-1">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Ver contactos</h5>
                        <p class="card-text">Ver los contactos.</p>
                        <a href="{{route('contactos.index')}}" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Crear contacto</h5>
                        <p class="card-text">Crea algún contacto.</p>
                        <a href="{{route('contactos.create')}}" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Actualizar contacto</h5>
                        <p class="card-text">Editar algún contacto.</p>
                        <a href="{{route('contactos.edit')}}" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Eliminar contacto</h5>
                        <p class="card-text">Eliminar algún contacto.</p>
                        <a href="{{route('contactos.show')}}" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection