@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Viajes</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Piloto Viajes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('piloto-viajes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Observacion</th>
									<th >Direccion Id</th>
									<th >Piloto Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pilotoViajes as $pilotoViaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $pilotoViaje->observacion }}</td>
										<td >{{ $pilotoViaje->piloto->nombre }}</td>

                                            <td>
                                                <form action="{{ route('piloto-viajes.destroy', $pilotoViaje->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('piloto-viajes.show', $pilotoViaje->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('piloto-viajes.edit', $pilotoViaje->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estas Seguro que deseas Eliminar?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pilotoViajes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop