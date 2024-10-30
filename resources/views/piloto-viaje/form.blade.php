<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="observacion" class="form-label">{{ __('Observacion') }}</label>
            <input type="text" name="observacion" class="form-control @error('observacion') is-invalid @enderror" value="{{ old('observacion', $pilotoViaje?->observacion) }}" id="observacion" placeholder="Observacion">
            {!! $errors->first('observacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion_id" class="form-label">{{ __('Direccion Id') }}</label>
            <input type="text" name="direccion_id" class="form-control @error('direccion_id') is-invalid @enderror" value="{{ old('direccion_id', $pilotoViaje?->direccion_id) }}" id="direccion_id" placeholder="Direccion Id">
            {!! $errors->first('direccion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="piloto_id" class="form-label">{{ __('Piloto Id') }}</label>
            <input type="text" name="piloto_id" class="form-control @error('piloto_id') is-invalid @enderror" value="{{ old('piloto_id', $pilotoViaje?->piloto_id) }}" id="piloto_id" placeholder="Piloto Id">
            {!! $errors->first('piloto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>