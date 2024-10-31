@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sedes</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Piloto Sedes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('piloto-sedes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Nombre</th>
									<th >Direccion Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pilotoSedes as $pilotoSede)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $pilotoSede->nombre }}</td>
										

                                            <td>
                                                <form action="{{ route('piloto-sedes.destroy', $pilotoSede->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('piloto-sedes.show', $pilotoSede->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('piloto-sedes.edit', $pilotoSede->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estas Seguro que quieres eliminarlo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pilotoSedes->withQueryString()->links() !!}
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