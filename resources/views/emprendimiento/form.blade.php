<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
        <div class="col-md-4">
            <div class="form-group">
                <strong>Autor: </strong>
                <br>
                <input type="text" class="form-control" id="filtro"/>
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
        <button type="submit" class="btn btn-primary">{{ __('Listo') }}</button>
    </div>
</div>