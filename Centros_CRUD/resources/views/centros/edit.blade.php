@extends('layouts.cabecera')
@section('title','Editar')
    
@section('content')
<h2 class="text-center">Editar Centro</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('centros.update', $centro)}}" method="post">
        @csrf
        @method('put')
        @include('layouts.form')
        <button type="submit" class="btn btn-success p-1 m-2">Editar</button>
        <button class="btn btn-danger p-1 mb-2"><a class="text-white" href="{{route('centros.show',$centro->id)}}">Eliminar centro</a></button>
    </form>
</div>
@endsection