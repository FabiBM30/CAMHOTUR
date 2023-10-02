<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
        <div class="col-md-4">
            <div class="form-group">
                <strong>Distrito: </strong>
                <br>
               
                <select class="form-control" name="id_Distrito" id="initialServers" multiple="multiple">
                @foreach ($distrito as $distrito_s)
                    <option value="{{$distrito_s -> id}}">{{$distrito_s -> nombreDistrito}} 
                @endforeach
                </select>

            </div>

        </div>
           <div class="invalid-feedback">:message</div>
        </div>
        <div class="form-group">
            {{ Form::label('Emprendimiento') }}
            {{ Form::text('nombreEmprendimiento', $emprendimiento->nombreEmprendimiento, ['class' => 'form-control' . ($errors->has('nombreEmprendimiento') ? ' is-invalid' : ''), 'placeholder' => 'Digite el nombre del emprendimiento...']) }}
            {!! $errors->first('nombreEmprendimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de emprendimiento') }}
            {{ Form::select('tipo_emprendimiento', ['' => 'Seleccione:', 'Productos' => 'Productos', 'Servicios' => 'Servicios', 'Turismo' => 'Turismo'], $emprendimiento->tipo_emprendimiento, ['class' => 'form-control', 'id' => 'tipo_emprendimiento', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Tipo de emprendimiento', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
      

        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcionEmprendimiento', $emprendimiento->descripcionEmprendimiento, ['class' => 'form-control' . ($errors->has('descripcionEmprendimiento') ? ' is-invalid' : ''), 'placeholder' => 'Describa el emprendimiento...']) }}
            {!! $errors->first('descripcionEmprendimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20"> 
        <br>
        <button type="submit" class="btn btn-primary">Listo</button>
        
        <span style="margin: 0 10px;"></span> <!-- Espacio entre los botones -->
        
        <a class="btn btn-danger" href="{{ route('emprendimientos.index') }}">Atrás</a>
    </div>
    