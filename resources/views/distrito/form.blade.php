<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreDistrito') }}
            {{ Form::text('nombreDistrito', $distrito->nombreDistrito, ['class' => 'form-control' . ($errors->has('nombreDistrito') ? ' is-invalid' : ''), 'placeholder' => 'Nombredistrito']) }}
            {!! $errors->first('nombreDistrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcionDistrito') }}
            {{ Form::text('descripcionDistrito', $distrito->descripcionDistrito, ['class' => 'form-control' . ($errors->has('descripcionDistrito') ? ' is-invalid' : ''), 'placeholder' => 'Descripciondistrito']) }}
            {!! $errors->first('descripcionDistrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
    {{ Form::label('imagenDistrito', 'Imagen Distrito') }}
    <br>
    <img src="{{ asset('storage/'.$distrito->imagenDistrito) }}" width="300" alt="">
    <br>
    {{ Form::file('nuevaImagenDistrito', ['class' => 'form-control']) }}
</div>


    </div>
     <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
