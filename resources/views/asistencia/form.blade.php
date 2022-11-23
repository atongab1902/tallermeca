<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::number('Cedula', $asistencia->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre y Apellido') }}
            {{ Form::text('Nombre', $asistencia->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre y Apellido']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $asistencia->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de entrada') }}
            {{ Form::time('asistenciaentrada', $asistencia->asistenciaentrada, ['class' => 'form-control' . ($errors->has('asistenciaentrada') ? ' is-invalid' : ''), 'placeholder' => 'Asistenciaentrada']) }}
            {!! $errors->first('asistenciaentrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora de salida') }}
            {{ Form::time('asistenciasalida', $asistencia->asistenciasalida, ['class' => 'form-control' . ($errors->has('asistenciasalida') ? ' is-invalid' : ''), 'placeholder' => 'Asistenciasalida']) }}
            {!! $errors->first('asistenciasalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>