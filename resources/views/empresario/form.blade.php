<div class="box box-info padding-1">
    <div class="box-body">
        
        <!--<div class="form-group">
            {{ Form::label('idEmpresario') }}
            {{ Form::text('idEmpresario', $empresario->idEmpresario, ['class' => 'form-control' . ($errors->has('idEmpresario') ? ' is-invalid' : ''), 'placeholder' => 'Idempresario']) }}
            {!! $errors->first('idEmpresario', '<div class="invalid-feedback">:message</div>') !!}
        </div>-->
        <div class="form-group">
            {{ Form::label('nombreEmpresario') }}
            {{ Form::text('nombreEmpresario', $empresario->nombreEmpresario, ['class' => 'form-control' . ($errors->has('nombreEmpresario') ? ' is-invalid' : ''), 'placeholder' => 'Nombreempresario']) }}
            {!! $errors->first('nombreEmpresario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoEmpresario') }}
            {{ Form::text('apellidoEmpresario', $empresario->apellidoEmpresario, ['class' => 'form-control' . ($errors->has('apellidoEmpresario') ? ' is-invalid' : ''), 'placeholder' => 'Apellidoempresario']) }}
            {!! $errors->first('apellidoEmpresario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('generoEmpresario') }}
            {{ Form::text('generoEmpresario', $empresario->generoEmpresario, ['class' => 'form-control' . ($errors->has('generoEmpresario') ? ' is-invalid' : ''), 'placeholder' => 'Generoempresario']) }}
            {!! $errors->first('generoEmpresario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>