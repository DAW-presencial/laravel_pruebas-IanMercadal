@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <h1 class="text-center">Ver Contactos</h1>

    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    @can('create', $contactos)
                        <th> <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.create')}}">Crear contacto</a></button></th>      
                    @endcan

                    @cannot('create', $contactos)
                        <th> <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.create')}}">Crear contacto</a></button></th>      
                    @endcannot
                </tr>
            </thead>
                @foreach($contactos as $contacto)
                <tr class="text-center">
                    <td>{{ $contacto->id}}</td>
                    <td>{{ $contacto->name}}</td>
                    <td>{{ $contacto->numero}}</td>
                    <td>
                        @can('update', $contacto)
                        <a href="{{route('contactos.edit', $contacto->id)}}"><button class="btn btn-primary">Editar</button></a>
                        @endcan
                        
                        @cannot('update', $contacto)
                        <p>No puedes editar</p>
                        @endcannot
                    </td>
                    <td>
                        @can('delete', $contacto)
                            <a href="{{route('contactos.show', $contacto->id)}}"><button class="btn btn-danger">Eliminar</button></a>
                        @endcan
                        
                        @cannot('delete', $contacto)
                            <p>No puedes eliminar</p>
                        @endcannot
                    </td>
                </tr>
                @endforeach


            <tbody>

            </tbody>
        </table>
    </div>
@endsection