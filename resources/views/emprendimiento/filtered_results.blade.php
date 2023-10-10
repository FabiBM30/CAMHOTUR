@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Emprendimientos de tipo "{{ $tipo }}"</h1>
                    </div>
                    <div class="card-body">
                        @if($emprendimientosFiltrados->isEmpty())
                            <div class="alert alert-info">
                                No se encontraron emprendimientos de este tipo.
                            </div>
                        @else
                            <ul class="list-group">
                                @foreach($emprendimientosFiltrados as $emprendimiento)
                                    <li class="list-group-item">{{ $emprendimiento->nombreEmprendimiento }}
                                    <a href="{{ route('catalogos.por.emprendimiento', $emprendimiento->idEmprendimiento) }}" class="btn btn-info btn-sm">Ver Catálogos</a>
    
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
