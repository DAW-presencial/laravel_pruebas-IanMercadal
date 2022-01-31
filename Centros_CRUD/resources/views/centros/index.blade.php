@extends('layouts.cabecera')
@section('title','Index')
    
@section('content')
<h1 class="text-center">Centros</h1>
<div class="container">
    <table class="table table-dark">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Centro</th>
                <th scope="col">Fundado</th>
                <th>
                    @can('create', \App\Models\Centro::class)
                        <button class="btn btn-primary"><a class="text-white" href="{{route('centros.create')}}">Crear centro</a></button>
                    @endcan  
                </th>      
            </tr>
        </thead>
        <tbody>

            @foreach($centros as $centro)
            <tr class="text-center">
                <td>{{ $centro->id}}</td>
                <td>{{ $centro->name}}</td>
                <td>{{ $centro->fundado}}</td>
                <td>
                @can('update', $centro)
                    <a href="{{route('centros.edit', $centro->id)}}"><button class="btn btn-primary">Editar</button></a>
                @endcan

                @cannot('update', $centro)
                    <p>No puedes Editar</p>
                @endcannot

                @can('delete', $centro)
                    <button class="btn btn-danger"><a class="text-white" href="{{route('centros.show',$centro->id)}}">Eliminar</a></button>
                @endcan

                @cannot('delete', $centro)
                    <p>No puedes Eliminar</p>
                @endcannot
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection