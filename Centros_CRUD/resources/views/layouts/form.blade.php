<div>
    @foreach ($errors->all() as $error)
    <ul>
        <li class="text-danger">
    {{ $error }}
        </li> 
    </ul>
    <br/>
    @endforeach
<div>

<div class="form-group m-2">
    <label>Nombre: <br> <input class="form-control" type="text" name="name" value="{{ old('name'), $centro->name}}" required></label>
    @error('name')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
</div>

<div class="form-group m-2">
    <label>Capacidad: <br> <input type="number" class="form-control" name="capacidad" value="{{ old('capacidad'), $centro->capacidad }}" required></label>
    @error('capacidad')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
</div>

<div class="form-group m-2">
    <label>Fundado: <br> <input type="date" class="form-control" name="fundado" value="{{ old('fundado')}}"></label>
    @error('fundado')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
</div>

<div class="form-group m-2">
    <label>Entidad:</label>
    <br> 
        <label>Pública<input type="radio" name="entidad" value="publica" {{old('entidad' == 'publica') ? 'checked' : "" }} ></label><br>
        <label>Privada<input type="radio" name="entidad" value="privada" {{old('entidad' == 'privada') ? 'checked' : "" }}></label><br>
        <label>Concertada<input type="radio" name="entidad" value="concertada" {{old('entidad' == 'concertada') ? 'checked' : "" }}></label><br>
    <br>
    @error('entidad')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
</div>

<div class="form-group m-2">
    <label>ExtraEscolar:</label>
    <br>
    <label for="extra-select">Selecciona</label>

    <select name="extra_escolar" id="extraEscolar">
        <option value="">--Selecciona una opcion--</option>
        <option value="futbol" @if (old('extra_escolar' == 'futbol')) selected @endif> Fútbol</option>
        <option value="baile" @if (old('extra_escolar' == 'baile')) selected @endif>Baile</option>
        <option value="repaso" @if (old('extra_escolar' == 'repaso')) selected @endif>Repaso</option>
    </select>
</div>

<div class="form-group m-2">
    <label>Descripcion:</label>
    <br>
    <textarea name="descripcion" rows="5" required></textarea>

    @error('descripcion')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
</div>

<div class="form-group m-2">
    <label>Terminos:</label>

    <ul>
        <li><label>Aceptar: <input type="checkbox" name="terminos" value="aceptar" {{old('terminos' == 'aceptar') ? 'checked' : "" }}></label></li>
    </ul>
    @error('terminos')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
</div>
