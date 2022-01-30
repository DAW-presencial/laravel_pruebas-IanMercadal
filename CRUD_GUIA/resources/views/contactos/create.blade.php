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
                <label>Nombre: <br> <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}"> </label>
            
                @error('nombre')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Teléfono: <br> <input type="number" class="form-control" name="telefono" value="{{ old('telefono') }}"> </label>
            
                @error('telefono')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Nacimiento: <br> <input type="date" class="form-control" name="nacimiento" value="{{ old('nacimiento')}}"></label>
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
                    <option value="deporte">Deporte</option>
                    <option value="arte">Arte</option>
                    <option value="otro">Otro</option>
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
                <input type="radio" id="opcion1" name="sexo" value="masculino">

                <label for="opcion2">Femenino</label>
                <input type="radio" id="opcion2" name="sexo" value="femenino">

                <label for="opcion3">Otro</label>
                <input type="radio" id="opcion3" name="sexo" value="otro">

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

                </textarea>

                @error('descripcion')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="form-group">
                <label>Aceptar terminos
                    <input type="checkbox" value="true" name="terminos">
                </label>
            </div>

            <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">

            <button type="submit" class="btn btn-success p-1 mb-2">Crear</button>
        </form>
    </div>
@endsection