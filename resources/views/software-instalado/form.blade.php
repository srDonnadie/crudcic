<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_software') }}
            {{ Form::text('tipo_software', $softwareInstalado->tipo_software, ['class' => 'form-control' . ($errors->has('tipo_software') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('tipo_software', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_software') }}
            {{ Form::text('nombre_software', $softwareInstalado->nombre_software, ['class' => 'form-control' . ($errors->has('nombre_software') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('nombre_software', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('version_software') }}
            {{ Form::text('version_software', $softwareInstalado->version_software, ['class' => 'form-control' . ($errors->has('version_software') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('version_software', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_instalacion') }}
            {{ Form::text('fecha_instalacion', $softwareInstalado->fecha_instalacion, ['class' => 'form-control' . ($errors->has('fecha_instalacion') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('fecha_instalacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serial') }}
            {{ Form::select('serial_id', $equipos, $softwareInstalado->serial_id, ['class' => 'form-control' . ($errors->has('serial_id') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('serial_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary btn-lg">Registar</button>
    </div>
</div>