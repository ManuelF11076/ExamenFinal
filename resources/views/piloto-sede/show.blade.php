@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vizualizar</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Piloto Sede</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('piloto-sedes.index') }}"> {{ __('regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $pilotoSede->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion Id:</strong>
                                    {{ $pilotoSede->direccion_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop