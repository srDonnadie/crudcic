<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_entrega') }}
            {{ Form::text('fecha_entrega', $equiposUsuario->fecha_entrega, ['class' => 'form-control' . ($errors->has('fecha_entrega') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('fecha_entrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_entrega') }}
            {{ Form::text('estado_entrega', $equiposUsuario->estado_entrega, ['class' => 'form-control' . ($errors->has('estado_entrega') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('estado_entrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $equiposUsuario->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_devolucion') }}
            {{ Form::text('fecha_devolucion', $equiposUsuario->fecha_devolucion, ['class' => 'form-control' . ($errors->has('fecha_devolucion') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('fecha_devolucion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacion_devolucion') }}
            {{ Form::text('observacion_devolucion', $equiposUsuario->observacion_devolucion, ['class' => 'form-control' . ($errors->has('observacion_devolucion') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('observacion_devolucion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('C.C') }}
            {{ Form::select('cc_id', $usuarios, $equiposUsuario->cc_id, ['class' => 'form-control' . ($errors->has('cc_id') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('cc_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serial') }}
            {{ Form::select('serial_id', $equipos, $equiposUsuario->serial_id, ['class' => 'form-control' . ($errors->has('serial_id') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('serial_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary btn-lg">Registar</button>
    </div>
</div>