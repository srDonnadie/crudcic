<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('serial') }}
            {{ Form::text('serial', $equipo->serial, ['class' => 'form-control' . ($errors->has('serial') ? ' is-invalid' : ''), 'placeholder' => 'Serial']) }}
            {!! $errors->first('serial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $equipo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_equipo') }}
            {{ Form::text('tipo_equipo', $equipo->tipo_equipo, ['class' => 'form-control' . ($errors->has('tipo_equipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Equipo']) }}
            {!! $errors->first('tipo_equipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_interno') }}
            {{ Form::text('codigo_interno', $equipo->codigo_interno, ['class' => 'form-control' . ($errors->has('codigo_interno') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Interno']) }}
            {!! $errors->first('codigo_interno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referencia') }}
            {{ Form::text('referencia', $equipo->referencia, ['class' => 'form-control' . ($errors->has('referencia') ? ' is-invalid' : ''), 'placeholder' => 'Referencia']) }}
            {!! $errors->first('referencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary btn-lg">Registar</button>
    </div>
</div>