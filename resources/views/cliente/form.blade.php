<div class="box box-info padding-1">
    <div class="box-body">
        
        <!--<div class="form-group">
            {{ Form::label('idCliente') }}
            {{ Form::text('idCliente', $cliente->idCliente, ['class' => 'form-control' . ($errors->has('idCliente') ? ' is-invalid' : ''), 'placeholder' => 'Idcliente']) }}
            {!! $errors->first('idCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>-->
        <div class="form-group">
            {{ Form::label('nombreCliente') }}
            {{ Form::text('nombreCliente', $cliente->nombreCliente, ['class' => 'form-control' . ($errors->has('nombreCliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecliente']) }}
            {!! $errors->first('nombreCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoCliente') }}
            {{ Form::text('apellidoCliente', $cliente->apellidoCliente, ['class' => 'form-control' . ($errors->has('apellidoCliente') ? ' is-invalid' : ''), 'placeholder' => 'Apellidocliente']) }}
            {!! $errors->first('apellidoCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('generoCliente') }}
            {{ Form::text('generoCliente', $cliente->generoCliente, ['class' => 'form-control' . ($errors->has('generoCliente') ? ' is-invalid' : ''), 'placeholder' => 'Generocliente']) }}
            {!! $errors->first('generoCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>