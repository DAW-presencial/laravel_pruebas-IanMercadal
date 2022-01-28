@extends('layouts.cabecera')
@section('title','Index')
    
@section('content')
<div class="container">
    <table class="table table-dark">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Centro</th>
                <th scope="col">Fundado</th>
                <th><button class="btn btn-primary"><a class="text-white" href="{{route('centros.create')}}">Crear centro</a></button></th>      
            </tr>
        </thead>
        <tbody>

            @foreach($centros as $centro)
            <tr class="text-center">
                <td>{{ $centro->id}}</td>
                <td>{{ $centro->name}}</td>
                <td>{{ $centro->fundado}}</td>
                <td>
                {{-- <a href="{{route('centros.edit', $centro->id)}}"><button class="btn btn-primary">Editar</button></a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection