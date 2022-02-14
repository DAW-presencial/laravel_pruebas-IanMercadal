@extends('layouts.plantilla')
@section('title','Index')
    
@section('content')

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr class="text-center">
                <th scope="col">Nombre</th>
                <th scope="col">Extracto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>    
                <th scope="col">Ver</th>   
            </tr>
        </thead>
        <tbody>

            @foreach($products as $product)
            <tr class="text-center">
                <td>{{ $product->name}}</td>
                <td>{{ $product->slug}}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->price}}</td>

                <td> <a href="{{route('api.show', $product->id)}}"><button class="btn btn-primary">Ver</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection