<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_mantenimiento') }}
            {{ Form::text('fecha_mantenimiento', $mantenimiento->fecha_mantenimiento, ['class' => 'form-control' . ($errors->has('fecha_mantenimiento') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('fecha_mantenimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_mantenimiento') }}
            {{ Form::text('estado_mantenimiento', $mantenimiento->estado_mantenimiento, ['class' => 'form-control' . ($errors->has('estado_mantenimiento') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('estado_mantenimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_mantenimiento') }}
            {{ Form::text('tipo_mantenimiento', $mantenimiento->tipo_mantenimiento, ['class' => 'form-control' . ($errors->has('tipo_mantenimiento') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('tipo_mantenimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('realizado_por') }}
            {{ Form::text('realizado_por', $mantenimiento->realizado_por, ['class' => 'form-control' . ($errors->has('realizado_por') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('realizado_por', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones_mantenimiento') }}
            {{ Form::text('observaciones_mantenimiento', $mantenimiento->observaciones_mantenimiento, ['class' => 'form-control' . ($errors->has('observaciones_mantenimiento') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('observaciones_mantenimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serial') }}
            {{ Form::select('serial_id', $equipos, $mantenimiento->serial_id, ['class' => 'form-control' . ($errors->has('serial_id') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('serial_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
         <button type="submit" class="btn btn-primary btn-lg">Registar</button>
    </div>
</div>