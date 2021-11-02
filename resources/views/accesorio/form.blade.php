<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('accesorios_computo') }}
            {{ Form::text('accesorios_computo', $accesorio->accesorios_computo, ['class' => 'form-control' . ($errors->has('accesorios_computo') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('accesorios_computo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cables_extras') }}
            {{ Form::text('cables_extras', $accesorio->cables_extras, ['class' => 'form-control' . ($errors->has('cables_extras') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('cables_extras', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('extras') }}
            {{ Form::text('extras', $accesorio->extras, ['class' => 'form-control' . ($errors->has('extras') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('extras', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serial') }}
            {{ Form::select('serial_id', $equipos, $accesorio->serial_id, ['class' => 'form-control' . ($errors->has('serial_id') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('serial_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary btn-lg">Registar</button>
    </div>
</div>