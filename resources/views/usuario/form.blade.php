<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('C.C') }}
            {{ Form::text('cc', $usuario->cc, ['class' => 'form-control' . ($errors->has('cc') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('cc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_nombre') }}
            {{ Form::text('primer_nombre', $usuario->primer_nombre, ['class' => 'form-control' . ($errors->has('primer_nombre') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('primer_nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_nombre') }}
            {{ Form::text('segundo_nombre', $usuario->segundo_nombre, ['class' => 'form-control' . ($errors->has('segundo_nombre') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('segundo_nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_paterno') }}
            {{ Form::text('apellido_paterno', $usuario->apellido_paterno, ['class' => 'form-control' . ($errors->has('apellido_paterno') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('apellido_paterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_materno') }}
            {{ Form::text('apellido_materno', $usuario->apellido_materno, ['class' => 'form-control' . ($errors->has('apellido_materno') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('apellido_materno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $usuario->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $usuario->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary btn-lg">Registar</button>
    </div>
</div>