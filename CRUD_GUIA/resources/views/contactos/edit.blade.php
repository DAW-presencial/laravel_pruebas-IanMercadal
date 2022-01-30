@extends('layouts.plantilla')

@section('title','Edit')

@section('content')
    <h1 class="text-center">Editar Contacto</h1>

    <div class="container text-center p-2">
        <div class="btn-group " role="group">
            <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.index')}}">Volver a contactos</a></button>
            <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.create')}}">Crear contacto</a></button>
        </div>
    </div>

    <div class="container">
        <form class="border border-secondary text-center bg-light" action="{{route('contactos.update', $contacto)}}" method="post">
            @csrf
            @method('put')

            <div class="form-group">
                <label>Nombre: <br> <input class="form-control" type="text" name="nombre" value="{{ old('nombre',$contacto->nombre) }}"> </label>
            
                @error('nombre')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Teléfono: <br> <input type="number" class="form-control" name="telefono" value="{{ old('telefono',$contacto->telefono) }}"> </label>
            
                @error('telefono')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Nacimiento: <br> <input type="date" class="form-control" name="nacimiento" value="{{ old('nacimiento',$contacto->nacimiento)}}"></label>
                @error('nacimiento')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label for="aficion">Afición:</label>
                <br>
                <select name="aficion" id="aficion">
                    <option value="">--Selecciona una opción--</option>
                    <option value="deporte" @if (old('aficion', $contacto->aficion) === 'deporte') selected @endif>Deporte</option>
                    <option value="arte" @if (old('aficion',$contacto->aficion) === 'arte') selected @endif>Arte</option>
                    <option value="otro" @if (old('aficion',$contacto->aficion) === 'otro') selected @endif>Otro</option>
                </select>
            
                @error('aficion')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Sexo:</label>
                <br>

                <label for="opcion1">Masculino</label>

                <input type="radio" id="opcion1" name="sexo" value="masculino" {{ old('name', $contacto->sexo) == 'masculino' ? 'checked='.'"checked"' : '' }}>

                <label for="opcion2">Femenino</label>
                <input type="radio" id="opcion2" name="sexo" value="femenino" {{ old('name', $contacto->sexo) == "femenino" ? 'checked='.'"checked"' : '' }}>

                <label for="opcion3">Otro</label>
                <input type="radio" id="opcion3" name="sexo" value="otro" {{ old('sexo', $contacto->sexo) == "otro" ? 'checked='.'"checked"' : '' }}>

                @error('sexo')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Descripcion:</label>
                <br>
                <textarea name="descripcion">
                    {{old('descripcion', $contacto->descripcion)}}
                </textarea>

                @error('descripcion')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <br>

            <button class="btn btn-success p-1 mb-2" type="submit">Actualizar Contacto</button>
            <button class="btn btn-danger p-1 mb-2"><a class="text-white" href="{{route('contactos.show',$contacto->id)}}">Eliminar contacto</a></button>

        </form>
    </div>
@endsection