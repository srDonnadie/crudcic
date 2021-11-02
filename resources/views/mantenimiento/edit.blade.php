@extends('layouts.app')

@section('template_title')
    Update Mantenimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar información del mantenimiento</span>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('mantenimientos.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mantenimientos.update', $mantenimiento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('mantenimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
