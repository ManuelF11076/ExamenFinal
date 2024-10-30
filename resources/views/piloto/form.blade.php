<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $piloto?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $piloto?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dpi" class="form-label">{{ __('Dpi') }}</label>
            <input type="text" name="dpi" class="form-control @error('dpi') is-invalid @enderror" value="{{ old('dpi', $piloto?->dpi) }}" id="dpi" placeholder="Dpi">
            {!! $errors->first('dpi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $piloto?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        @php
    use App\Models\PilotoSede;
    $sedes = PilotoSede::all(); // Obtén todas las sedes del modelo
@endphp

<div class="form-group mb-2 mb20">
    <label for="sede_id" class="form-label">{{ __('Sede Id') }}</label>
    <select name="sede_id" class="form-control @error('sede_id') is-invalid @enderror" id="sede_id">
        <option value="">{{ __('Seleccione una Sede') }}</option>
        @foreach ($sedes as $sede)
            <option value="{{ $sede->id }}" {{ old('sede_id', $piloto?->sede_id) == $sede->id ? 'selected' : '' }}>
                {{ $sede->nombre }}
            </option>
        @endforeach
    </select>
    {!! $errors->first('sede_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>