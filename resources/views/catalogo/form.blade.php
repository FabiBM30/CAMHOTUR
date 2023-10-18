<script src="https://unpkg.com/autonumeric@4.2.0/dist/autoNumeric.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new AutoNumeric('#precio', {
            currencySymbol: '₡',
            digitGroupSeparator: ',',
            decimalCharacter: '.',
            decimalPlaces: 2,
            minimumValue: '0.00',
            unformatOnSubmit: true // Permite enviar el valor sin formato al servidor
        });
    });
</script>


<div class="box box-info padding-1">
    <div class="box-body">
        
    
        <div class="form-group">
            {{ Form::label('Producto') }}
            {{ Form::text('nombreCatalogos', $catalogo->nombreCatalogos, ['class' => 'form-control' . ($errors->has('nombreCatalogos') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del producto...']) }}
            {!! $errors->first('nombreCatalogos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
                <strong>Emprendimiento al que pertenece: </strong>
                <br>
                <select class="form-control" name="id_Empren" id="initialServers" multiple="multiple">
                @foreach ($emprendimientos as $emprendimiento_s)
                    <option value="{{$emprendimiento_s -> idEmprendimiento}}">{{$emprendimiento_s -> nombreEmprendimiento}} 
                @endforeach
                </select>

            </div>
            <br>
            <div class="form-group">
    {{ Form::label('Precio') }}
    {{ Form::text('cantidad', $catalogo->cantidad, [
        'class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''),
        'placeholder' => 'Precio del producto...',
        'id' => 'precio'
    ]) }}
    {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
</div>
        <br>
        <div class="form-group">
             {{ Form::label('estado', 'Estado') }}
             {{ Form::select('estado', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], $catalogo->estado, ['class' => 'form-control', 'placeholder' => 'Seleccione Estado']) }}
             {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         <br>
        <div class="form-group">
   
   {{ Form::label('foto  ', 'Seleccione una imagen para el producto...') }}
   <img src="{{ asset('storage/'.$catalogo->foto) }}" width="300" alt="">
   <br>
   {{ Form::file('nuevaImagen', ['class' => 'form-control']) }}
</div>


   </div>
<br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Listo</button>
        <a class="btn btn-danger" href="{{ route('catalogos.index') }}"> Atrás</a>
    </div>
</div>