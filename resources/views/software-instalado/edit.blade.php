@extends('layouts.app')

@section('template_title')
    Update Software Instalado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar información del software</span>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('software-instalados.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('software-instalados.update', $softwareInstalado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('software-instalado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
