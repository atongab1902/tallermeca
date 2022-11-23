<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::number('Cedula', $empleado->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $empleado->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargos_id') }}
            {{ Form::text('cargos_id', $empleado->cargos_id, ['class' => 'form-control' . ($errors->has('cargos_id') ? ' is-invalid' : ''), 'placeholder' => 'Cargos Id']) }}
            {!! $errors->first('cargos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario') }}
            {{ Form::text('Horario', $empleado->Horario, ['class' => 'form-control' . ($errors->has('Horario') ? ' is-invalid' : ''), 'placeholder' => 'Horario']) }}
            {!! $errors->first('Horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secondary">Crear</button>
    </div>
</div>