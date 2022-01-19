@extends('layouts.plantilla')

@section('title','Crear')

@section('content')
    <h1 class="text-center">Crear Contacto</h1>

    <div class="container text-center p-2">
        <div class="btn-group " role="group">
            <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.index')}}">Volver a contactos</a></button>
        </div>
    </div>

    <div class="container">
        
        <form class="border border-secondary text-center bg-light" action="{{route('contactos.store')}}" method="post">
            @csrf
            
            <div class="form-group">
                <label>Nombre: <br> <input class="form-control" type="text" name="name" value="{{ old('name') }}"> </label>
            
                @error('name')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Teléfono: <br> <input type="text" class="form-control" name="numero" value="{{ old('numero') }}"> </label>
            
                @error('numero')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <button type="submit" class="btn btn-success p-1 mb-2">Crear</button>
        </form>
    </div>
@endsection