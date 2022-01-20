@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <h1 class="text-center">Opciones</h1>

    <div class="container">
        <div class="card-group">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ver Contactos</h5>
                <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.index')}}">Entrar</a></button></th>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ver Contactos</h5>
                <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.index')}}">Entrar</a></button></th>
              </div>
            </div>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ver Contactos</h5>
                  <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.index')}}">Entrar</a></button></th>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ver Contactos</h5>
                  <button class="btn btn-primary"><a class="text-white" href="{{route('contactos.index')}}">Entrar</a></button></th>
                </div>
              </div>
          </div>
        </div>
    <div>
@endsection