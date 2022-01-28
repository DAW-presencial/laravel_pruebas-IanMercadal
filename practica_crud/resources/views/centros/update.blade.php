@extends('layouts.cabecera')
@section('title','Update')
    
@section('content')
<h2 class="text-center">Editar Centro</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('centros.update')}}" method="post">
        @csrf
        @method('PUT')
        @include('layouts.form');
        <button type="submit" class="btn btn-success p-1 m-2">Editar</button>
    </form>
</div>
@endsection