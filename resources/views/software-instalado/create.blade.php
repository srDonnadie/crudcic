@extends('layouts.app')

@section('template_title')
    Create Software Instalado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registrar nuevo software</span>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('software-instalados.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('software-instalados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('software-instalado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
