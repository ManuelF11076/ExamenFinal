<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $pilotoSede?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        @php
    use App\Models\Direccione;
    $direcciones = Direccione::all(); // Obtén todas las direcciones desde el modelo
@endphp

<div class="form-group mb-2 mb20">
    <label for="direccion_id" class="form-label">{{ __('Direccion Id') }}</label>
    <select name="direccion_id" class="form-control @error('direccion_id') is-invalid @enderror" id="direccion_id">
        <option value="">{{ __('Seleccione una Dirección') }}</option>
        @foreach ($direcciones as $direccion)
            <option value="{{ $direccion->id }}" {{ old('direccion_id', $pilotoSede?->direccion_id) == $direccion->id ? 'selected' : '' }}>
                {{ $direccion->nombre }}
            </option>
        @endforeach
    </select>
    {!! $errors->first('direccion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>