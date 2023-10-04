@extends('layouts.app')

@section('template_title')
    {{ $catalogo->name ?? "{{ __('Show') Catalogo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Catalogo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('catalogos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcatalogos:</strong>
                            {{ $catalogo->idCatalogos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrecatalogos:</strong>
                            {{ $catalogo->nombreCatalogos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empre:</strong>
                            {{ $catalogo->id_Empre }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $catalogo->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $catalogo->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $catalogo->foto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
