@extends('layouts.app')

@section('template_title')
    {{ $mantenimiento->name ?? 'Show Mantenimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <strong>Serial:</strong>
                            <span class="card-title">{{ $mantenimiento->serial_id }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('mantenimientos.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Mantenimiento:</strong>
                            {{ $mantenimiento->fecha_mantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Mantenimiento:</strong>
                            {{ $mantenimiento->estado_mantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Mantenimiento:</strong>
                            {{ $mantenimiento->tipo_mantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Realizado Por:</strong>
                            {{ $mantenimiento->realizado_por }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones Mantenimiento:</strong>
                            {{ $mantenimiento->observaciones_mantenimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
