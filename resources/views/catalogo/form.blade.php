<div class="box box-info padding-1">
    <div class="box-body">
        
    
        <div class="form-group">
            {{ Form::label('nombreCatalogos') }}
            {{ Form::text('nombreCatalogos', $catalogo->nombreCatalogos, ['class' => 'form-control' . ($errors->has('nombreCatalogos') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecatalogos']) }}
            {!! $errors->first('nombreCatalogos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <strong>Emprendimiento: </strong>
                <br>
                <select class="form-control" name="id_Empren" id="initialServers" multiple="multiple">
                @foreach ($emprendimientos as $emprendimiento_s)
                    <option value="{{$emprendimiento_s -> idEmprendimiento}}">{{$emprendimiento_s -> nombreEmprendimiento}} 
                @endforeach
                </select>

            </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $catalogo->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                                {{ Form::label('estado', 'Estado') }}
                                {{ Form::select('estado', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], $catalogo->estado, ['class' => 'form-control', 'placeholder' => 'Seleccione Estado']) }}
                                {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
        <div class="form-group">
   
   {{ Form::label('foto  ', 'Seleccione una imagen...') }}
   <br>
   <img src="{{ asset('storage/'.$catalogo->foto) }}" width="300" alt="">
   <br>
   {{ Form::file('nuevaImagen', ['class' => 'form-control']) }}
</div>


   </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Listo</button>
        <a class="btn btn-danger" href="{{ route('catalogos.index') }}"> Atrás</a>
    </div>
</div>