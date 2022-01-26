@extends('layouts.cabecera')
@section('title','Index')
    
@section('content')
    <h2 class="text-center">Formulario</h2>

    <div class="continer d-flex justify-content-center">
        <form class="form border border-secondary text-start bg-light m-2 w-75" method="post">
            @csrf
            
            <div class="form-group m-2">
                <label>Nombre: <br> <input class="form-control" type="text" name="name" value=""></label>
            </div>
    
            <div class="form-group m-2">
                <label>Capacidad: <br> <input type="number" class="form-control" name="capacidad" value=""></label>
            </div>
    
            <div class="form-group m-2">
                <label>Fundado: <br> <input type="date" class="form-control" name="fundado" value=""> </label>
            </div>
    
            <div class="form-group m-2">
                <label>Estudios:</label>
            
                <ul>
                    <li><label>Primaria: <input type="checkbox" name="primaria"></label></li>
                    <li><label>ESO: <input type="checkbox" name="eso"></label></li>
                    <li><label>FP: <input type="checkbox" name="fp"></label></li>
                    <li><label>Universidad: <input type="checkbox" name="universidad"></label></li>
                </ul>
            </div>
    
            <div class="form-group m-2">
                <label>Entidad:</label>
                <br> 
                    <label for="html">Pública<input type="radio" name="entidad" value="publica"></label><br>
                    <label for="html">Privada<input type="radio" name="entidad" value="privada"></label><br>
                    <label for="html">Concertada<input type="radio" name="entidad" value="concertada"></label><br>
                <br>
            </div>
    
            <div class="form-group m-2">
                <label>ExtraEscolar:</label>
                <br>
                <label for="extra-select">Selecciona</label>
    
                <select name="extraEscolar" id="extraEscolar">
                    <option value="">--Selecciona una opcion--</option>
                    <option value="futbol">Fútbol</option>
                    <option value="baile">Baile</option>
                    <option value="repaso">Repaso</option>
                </select>
            </div>
    
            <div class="form-group m-2">
                <label>Descripcion:</label>
            
                <br>
                <textarea name="descripcion" rows="5"></textarea>
            </div>
    
            <button type="submit" class="btn btn-success p-1 m-2">Crear</button>
        </form>
    </div>
@endsection