<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Hora de Entrada') }}
            {{ Form::time('horaentrada', $horario->horaentrada, ['class' => 'form-control' . ($errors->has('horaentrada') ? ' is-invalid' : ''), 'placeholder' => 'Hora de Entrada']) }}
            {!! $errors->first('horaentrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de Salida') }}
            {{ Form::time('horasalida', $horario->horasalida, ['class' => 'form-control' . ($errors->has('horasalida') ? ' is-invalid' : ''), 'placeholder' => 'Hora de Salida']) }}
            {!! $errors->first('horasalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secondary">Aceptar</button>
    </div>
</div>