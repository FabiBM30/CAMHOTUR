<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombreDistrito', $distrito->nombreDistrito, ['class' => 'form-control' . ($errors->has('nombreDistrito') ? ' is-invalid' : ''), 'placeholder' => 'Ponga el nombre del distrito...']) }}
            {!! $errors->first('nombreDistrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcionDistrito', $distrito->descripcionDistrito, ['class' => 'form-control' . ($errors->has('descripcionDistrito') ? ' is-invalid' : ''), 'placeholder' => 'Ponga una descripcion del distrito...']) }}
            {!! $errors->first('descripcionDistrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
   
    {{ Form::label('imagenDistrito', 'Seleccione una imagen para el distrito...') }}
    <br>
    <img src="{{ asset('storage/'.$distrito->imagenDistrito) }}" width="300" alt="">
    <br>
    {{ Form::file('nuevaImagenDistrito', ['class' => 'form-control']) }}
</div>


    </div>
     <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Listo</button>
        <a class="btn btn-danger" href="{{ route('distritos.index') }}"> Atrás</a>
    </div>
</div>
