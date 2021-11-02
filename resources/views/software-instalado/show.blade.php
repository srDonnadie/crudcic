@extends('layouts.app')

@section('template_title')
    {{ $softwareInstalado->name ?? 'Show Software Instalado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <strong>Serial:</strong>
                            <span class="card-title">{{ $softwareInstalado->serial_id }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('software-instalados.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Software:</strong>
                            {{ $softwareInstalado->tipo_software }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Software:</strong>
                            {{ $softwareInstalado->nombre_software }}
                        </div>
                        <div class="form-group">
                            <strong>Version Software:</strong>
                            {{ $softwareInstalado->version_software }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Instalacion:</strong>
                            {{ $softwareInstalado->fecha_instalacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
