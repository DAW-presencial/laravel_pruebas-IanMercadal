@extends('layouts.plantilla')

@section('title','Edit')

@section('content')
    <h1 class="text-center">Editar Contacto</h1>

    <div class="container">
        <form class="form" action="{{route('contactos.update', $contacto)}}" method="post">
            @csrf
            @method('put')

            <label>Nombre: <br> <input type="text" name="name" value="{{ old('name', $contacto->name) }}"> </label>
            
            @error('name')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror

            <label>Teléfono: <br> <input type="text" name="numero" value="{{ old('numero', $contacto->numero) }}"> </label>
            
            @error('numero')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror

            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
@endsection