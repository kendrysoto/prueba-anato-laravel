<form action="/agencia/{{ $agencia->id }}" method="POST">
    @csrf
    @method('POST')
    <div>
        <label for="nombre">Nombre Agencia</label>
        <input type="text" id="nombre" name="nombre" value="{{ $agencia->nombre }}" required>
    </div>
    <div>
        <label for="nit">NIT</label>
        <input type="text" id="nit" name="nit" value="{{ $agencia->nit }}" required>
    </div>
    <div>
        <label for="tipo">Tipo</label>
        <select id="tipo" name="tipo">
            <option value="principal" {{ $agencia->tipo == 'principal' ? 'selected' : '' }}>Principal</option>
            <option value="sucursal" {{ $agencia->tipo == 'sucursal' ? 'selected' : '' }}>Sucursal</option>
        </select>
    </div>
    <button type="submit">Actualizar Agencia</button>
</form>
