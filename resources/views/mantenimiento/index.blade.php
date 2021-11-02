@extends('layouts.app')

@section('template_title')
    Mantenimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro de los mantenimientos') }}
                            </span>

                            <nav class="navbar navbar-light float-right">
                                    <form class="form-inline" action="{{route('mantenimientos.index')}}" method="get">
                                         <input value="{{$consulta}}" name="consulta" class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search" >
                                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                     </form>
                                     <form action="">
                                     <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Limpiar</button></form>
                                </nav>

                             <div class="float-right">
                                <a href="{{ route('mantenimientos.create') }}" class="btn btn-outline-dark float-right"  data-placement="left">
                                  {{ __('Insertar nuevo registro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
                                        
										<th>Fecha Mantenimiento</th>
										<th>Estado Mantenimiento</th>
										<th>Tipo Mantenimiento</th>
										<th>Realizado Por</th>
										<th>Observaciones Mantenimiento</th>
										<th>Serial</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mantenimientos as $mantenimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mantenimiento->fecha_mantenimiento }}</td>
											<td>{{ $mantenimiento->estado_mantenimiento }}</td>
											<td>{{ $mantenimiento->tipo_mantenimiento }}</td>
											<td>{{ $mantenimiento->realizado_por }}</td>
											<td>{{ $mantenimiento->observaciones_mantenimiento }}</td>
											<td>{{ $mantenimiento->serial_id }}</td>

                                            <td>
                                                <form action="{{ route('mantenimientos.destroy',$mantenimiento->id) }}" method="POST">
                                                    <a class="btn btn-outline-info" href="{{ route('mantenimientos.show',$mantenimiento->id) }}"><i class="fa fa-fw fa-eye"></i> Listar</a>
                                                    <a class="btn btn-outline-primary" href="{{ route('mantenimientos.edit',$mantenimiento->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $mantenimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
