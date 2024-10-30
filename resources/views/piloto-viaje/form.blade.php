<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="observacion" class="form-label">{{ __('Observacion') }}</label>
            <input type="text" name="observacion" class="form-control @error('observacion') is-invalid @enderror" value="{{ old('observacion', $pilotoViaje?->observacion) }}" id="observacion" placeholder="Observacion">
            {!! $errors->first('observacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
            <option value="{{ $direccion->id }}" {{ old('direccion_id', $pilotoViaje?->direccion_id) == $direccion->id ? 'selected' : '' }}>
                {{ $direccion->nombre }}
            </option>
        @endforeach
    </select>
    {!! $errors->first('direccion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>

        @php
    use App\Models\Piloto;
    $pilotos = Piloto::all(); // Obtén todos los pilotos desde el modelo
@endphp

<div class="form-group mb-2 mb20">
    <label for="piloto_id" class="form-label">{{ __('Piloto Id') }}</label>
    <select name="piloto_id" class="form-control @error('piloto_id') is-invalid @enderror" id="piloto_id">
        <option value="">{{ __('Seleccione un Piloto') }}</option>
        @foreach ($pilotos as $piloto)
            <option value="{{ $piloto->id }}" {{ old('piloto_id', $pilotoViaje?->piloto_id) == $piloto->id ? 'selected' : '' }}>
                {{ $piloto->nombre }}
            </option>
        @endforeach
    </select>
    {!! $errors->first('piloto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>