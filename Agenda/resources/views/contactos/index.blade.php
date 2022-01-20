@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <h1 class="text-center">Ver Contactos</h1>

    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Teléfono</th>
                    <th><button class="btn btn-primary"><a class="text-white" href="{{route('contactos.create')}}">Crear contacto</a></button></th>      
                </tr>
            </thead>
            <tbody>
                @foreach($contactos as $contacto)
                <tr class="text-center">
                    <td>{{ $contacto->user_id}}</td>
                    <td>{{ $contacto->name}}</td>
                    <td>{{ $contacto->phone}}</td>
                    <td>
                        @can('update', $contacto)
                            <a href="{{route('contactos.edit', $contacto->id)}}"><button class="btn btn-primary">Editar</button></a>
                        @endcan 

                        @cannot('update', $contacto)
                            <p>No puedes editar</p>
                        @endcannot
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection