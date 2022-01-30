@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Sexo</th>
                    <th><button class="btn btn-primary"><a class="text-white" href="{{route('contactos.create')}}">Crear contacto</a></button></th>      
                </tr>
            </thead>
            <tbody>
                @foreach($contactos as $contacto)
                <tr class="text-center">
                    <td>{{ $contacto->id}}</td>
                    <td>{{ $contacto->nombre}}</td>
                    <td>{{ $contacto->telefono}}</td>
                    <td>{{ $contacto->sexo}}</td>
                    <td>
                        <a href="{{route('contactos.edit', $contacto->id)}}"><button class="btn btn-primary">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection