<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $usuario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('turno') }}
            {{ Form::text('turno', $usuario->turno, ['class' => 'form-control' . ($errors->has('turno') ? ' is-invalid' : ''), 'placeholder' => 'Turno']) }}
            {!! $errors->first('turno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_turno') }}
            {{ Form::text('id_turno', $usuario->id_turno, ['class' => 'form-control' . ($errors->has('id_turno') ? ' is-invalid' : ''), 'placeholder' => 'Id Turno']) }}
            {!! $errors->first('id_turno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('t_empleado') }}
            {{ Form::text('t_empleado', $usuario->t_empleado, ['class' => 'form-control' . ($errors->has('t_empleado') ? ' is-invalid' : ''), 'placeholder' => 'T Empleado']) }}
            {!! $errors->first('t_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_empleados') }}
            {{ Form::text('id_tipo_empleados', $usuario->id_tipo_empleados, ['class' => 'form-control' . ($errors->has('id_tipo_empleados') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Empleados']) }}
            {!! $errors->first('id_tipo_empleados', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>