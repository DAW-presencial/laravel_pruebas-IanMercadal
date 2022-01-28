@extends('layouts.cabecera')
@section('title','Eliminar')
    
@section('content')
<h2 class="text-center">Eliminar Centro</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('centros.destroy', $centro)}}" method="post">
        @csrf
        @method('delete')
        {{-- @include('layouts.form') --}}
        <button type="submit" class="btn btn-danger p-1 mb-2">Eliminar</button>
    </form>
</div>
@endsection