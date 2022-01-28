@extends('layouts.cabecera')
@section('title','Create')
    
@section('content')
<h2 class="text-center">Crear Centro</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('centros.store', $centro)}}" method="post">
        @csrf
        @include('layouts.form')
        <button type="submit" class="btn btn-success p-1 m-2">Crear</button>
    </form>
</div>
@endsection