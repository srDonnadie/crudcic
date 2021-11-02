@extends('layouts.app')

@section('template_title')
    {{ $accesorio->name ?? 'Show Accesorio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <strong>Serial:</strong>
                            <span class="card-title">{{ $accesorio->serial_id }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('accesorios.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Accesorios Computo:</strong>
                            {{ $accesorio->accesorios_computo }}
                        </div>
                        <div class="form-group">
                            <strong>Cables Extras:</strong>
                            {{ $accesorio->cables_extras }}
                        </div>
                        <div class="form-group">
                            <strong>Extras:</strong>
                            {{ $accesorio->extras }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
