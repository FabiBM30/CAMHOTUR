@extends('layouts.app')

@section('template_title')
    {{ $distrito->name ?? "{{ __('Show') Distrito" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Distrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('distritos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombredistrito:</strong>
                            {{ $distrito->nombreDistrito }}
                        </div>
                        <div class="form-group">
                            <strong>Descripciondistrito:</strong>
                            {{ $distrito->descripcionDistrito }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
