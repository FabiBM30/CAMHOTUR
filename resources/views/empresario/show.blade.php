@extends('layouts.app')

@section('template_title')
    {{ $empresario->name ?? "{{ __('Show') Empresario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empresario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempresario:</strong>
                            {{ $empresario->idEmpresario }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreempresario:</strong>
                            {{ $empresario->nombreEmpresario }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidoempresario:</strong>
                            {{ $empresario->apellidoEmpresario }}
                        </div>
                        <div class="form-group">
                            <strong>Generoempresario:</strong>
                            {{ $empresario->generoEmpresario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
