@extends('layouts.app')

@section('template_title')
    {{ $emprendimiento->name ?? "{{ __('Show') Emprendimiento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Emprendimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('emprendimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idemprendimiento:</strong>
                            {{ $emprendimiento->idEmprendimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreemprendimiento:</strong>
                            {{ $emprendimiento->nombreEmprendimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcionemprendimiento:</strong>
                            {{ $emprendimiento->descripcionEmprendimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
