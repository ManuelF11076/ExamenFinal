@extends('layouts.app')

@section('template_title')
    {{ $pilotoViaje->name ?? __('Show') . " " . __('Piloto Viaje') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Piloto Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('piloto-viajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Observacion:</strong>
                                    {{ $pilotoViaje->observacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion Id:</strong>
                                    {{ $pilotoViaje->direccion_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Piloto Id:</strong>
                                    {{ $pilotoViaje->piloto_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
