@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? 'Show Equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <strong>Serial:</strong>
                            <span class="card-title">{{ $equipo->serial }}</span>
                        </div>
                        <div class="float-right">
                        <a class="btn btn-info" href="{{ route('equipos.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                       
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $equipo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Equipo:</strong>
                            {{ $equipo->tipo_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Interno:</strong>
                            {{ $equipo->codigo_interno }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $equipo->referencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
