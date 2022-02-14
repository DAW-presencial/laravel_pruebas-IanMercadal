@extends('layouts.plantilla')
@section('title','Show')
    
@section('content')

<div class="container bg-light">

    <div class="col">

        <div class="row">
            <h2>Producto: </h2>
        </div>

        <div class="row">
            <p>ID: {{$product->id}}</p>
        </div>

        <div class="row">
            <p>Nombre: {{$product->name}}</p>
        </div>

        <div class="row">
            <p>Descripción: {{$product->description}}</p>
        </div>

        <div class="row">
            <p>Precio: {{$product->price}}</p>
        </div>

    </div>

</div>

@endsection