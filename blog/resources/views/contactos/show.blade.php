@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <h1 class="text-center">Mostrar Contacto</h1>

    <div class="container">
    </div>

    <form action="{{route('contactos.destroy',$contacto)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection