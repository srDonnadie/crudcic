@extends('layouts.app')

@section('template_title')
    {{ $equiposUsuario->name ?? 'Show Equipos Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Registro del equipo & usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('equipos-usuarios.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Entrega:</strong>
                            {{ $equiposUsuario->fecha_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Entrega:</strong>
                            {{ $equiposUsuario->estado_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $equiposUsuario->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolucion:</strong>
                            {{ $equiposUsuario->fecha_devolucion }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion Devolucion:</strong>
                            {{ $equiposUsuario->observacion_devolucion }}
                        </div>
                        <div class="form-group">
                            <strong>C.C:</strong>
                            {{ $equiposUsuario->cc_id }}
                        </div>
                        <div class="form-group">
                            <strong>Serial:</strong>
                            {{ $equiposUsuario->serial_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
