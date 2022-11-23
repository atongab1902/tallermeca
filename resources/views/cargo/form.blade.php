<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('puesto') }}
            {{ Form::text('puesto', $cargo->puesto, ['class' => 'form-control' . ($errors->has('puesto') ? ' is-invalid' : ''), 'placeholder' => 'Puesto']) }}
            {!! $errors->first('puesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secondary">Crear</button>
    </div>
</div>