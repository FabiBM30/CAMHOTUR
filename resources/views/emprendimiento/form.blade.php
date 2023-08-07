<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('nombreEmprendimiento') }}
            {{ Form::text('nombreEmprendimiento', $emprendimiento->nombreEmprendimiento, ['class' => 'form-control' . ($errors->has('nombreEmprendimiento') ? ' is-invalid' : ''), 'placeholder' => 'Nombreemprendimiento']) }}
            {!! $errors->first('nombreEmprendimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcionEmprendimiento') }}
            {{ Form::text('descripcionEmprendimiento', $emprendimiento->descripcionEmprendimiento, ['class' => 'form-control' . ($errors->has('descripcionEmprendimiento') ? ' is-invalid' : ''), 'placeholder' => 'Descripcionemprendimiento']) }}
            {!! $errors->first('descripcionEmprendimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>