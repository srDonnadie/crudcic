@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <strong>C.C:</strong>
                            <span class="card-title">{{ $usuario->cc }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('usuarios.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $usuario->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $usuario->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $usuario->apellido_paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $usuario->apellido_materno }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $usuario->cargo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
