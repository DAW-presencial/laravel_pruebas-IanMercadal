@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <h1 class="text-center">Ver Contactos</h1>

    <div class="container">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">Contacto</th>
                    <th scope="col">Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
                @foreach($contactos as $contacto)
                <tr>
                    <td>{{ $contacto->name}}</td>
                    <td>{{ $contacto->numero}}</td>
                    <td><a href="{{route('contactos.edit', $contacto->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                </tr>
                @endforeach
            <tbody>

            </tbody>
        </table>
    </div>
@endsection