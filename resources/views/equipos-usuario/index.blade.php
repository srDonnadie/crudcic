@extends('layouts.app')

@section('template_title')
    Equipos Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro de los equipos & usuario') }}
                            </span>

                                <nav class="navbar navbar-light float-right">
                                    <form class="form-inline" action="{{route('equipos-usuarios.index')}}" method="get">
                                         <input value="{{$consulta}}" name="consulta" class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search" >
                                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                     </form>
                                     <form action="">
                                     <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Limpiar</button></form>
                                </nav>

                             <div class="float-right">
                                <a href="{{ route('equipos-usuarios.create') }}" class="btn btn-outline-dark float-right"  data-placement="left">
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
                                        
										<th>Fecha Entrega</th>
										<th>Estado Entrega</th>
										<th>Ubicacion</th>
										<th>Fecha Devolucion</th>
										<th>Observacion Devolucion</th>
										<th>C.C</th>
										<th>Serial</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equiposUsuarios as $equiposUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $equiposUsuario->fecha_entrega }}</td>
											<td>{{ $equiposUsuario->estado_entrega }}</td>
											<td>{{ $equiposUsuario->ubicacion }}</td>
											<td>{{ $equiposUsuario->fecha_devolucion }}</td>
											<td>{{ $equiposUsuario->observacion_devolucion }}</td>
											<td>{{ $equiposUsuario->cc_id }}</td>
											<td>{{ $equiposUsuario->serial_id }}</td>

                                            <td>
                                                <form action="{{ route('equipos-usuarios.destroy',$equiposUsuario->id) }}" method="POST">
                                                    <a class="btn btn-outline-info" href="{{ route('equipos-usuarios.show',$equiposUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Listar</a>
                                                    <a class="btn btn-outline-primary" href="{{ route('equipos-usuarios.edit',$equiposUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $equiposUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
