@extends('layouts.plantilla')

@section('title','Contacto')

@section('content')
    <h1 class="text-center">Mostrar Contacto</h1>

    
    <div class="container text-center p-2">
        <div class="btn-group " role="group">
            <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.index')}}">Volver a contactos</a></button>
            <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.create')}}">Crear contacto</a></button>
        </div>
    </div>

    <div class="container">
        
        <form class="border border-secondary text-center bg-light" action="{{route('contactos.destroy',$contacto)}}" method="post">
            @csrf
            @method('delete')
            
            <div class="form-group">
                <label>Nombre: <br> <input class="form-control" type="text" name="name" value="{{ old('name', $contacto->name) }}"> </label>
            
                @error('name')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Teléfono: <br> <input type="text" class="form-control" name="phone" value="{{ old('phone', $contacto->phone) }}"> </label>
            
                @error('phone')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <button type="submit" class="btn btn-danger p-1 mb-2">Eliminar</button>
        </form>
    </div>
@endsection