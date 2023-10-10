@extends('layouts.app')

@section('template_title')
    Catálogos por Emprendimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                            {{ __('Productos de   ') }}{{ $emprendimiento->nombreEmprendimiento }}
                            </span>
                            <div class="float-right">
                                <!-- Puedes agregar un botón aquí si es necesario -->
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N#</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Estado</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogos as $catalogo)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $catalogo->nombreCatalogos }}</td>
                                            <td>{{ $catalogo->cantidad }}</td>
                                            <td>{{ $catalogo->estado }}</td>
                                            <td>
                                                <img src="{{ asset('storage/image/'.$catalogo->foto) }}" width="150" alt="" title="" />
                                            </td>
                                            <td>
                                                <!-- Agrega aquí los botones que necesites -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-0">
                            <div class="col-md-0 offset-md-0">
                                </button>
                                <a class="btn btn-danger" href="{{ route('catalogos.index') }}"> Atrás</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
