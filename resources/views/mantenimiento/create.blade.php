@extends('layouts.app')

@section('template_title')
    Create Mantenimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registrar nuevo mantenimiento</span>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('mantenimientos.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mantenimientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('mantenimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
