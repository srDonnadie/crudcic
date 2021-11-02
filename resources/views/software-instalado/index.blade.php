@extends('layouts.app')

@section('template_title')
    Software Instalado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro de los software instalado') }}
                            </span>

                                <nav class="navbar navbar-light float-right">
                                    <form class="form-inline" action="{{route('software-instalados.index')}}" method="get">
                                         <input value="{{$consulta}}" name="consulta" class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search" >
                                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                     </form>
                                     <form action="">
                                     <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Limpiar</button></form>
                                </nav>

                             <div class="float-right">
                                <a href="{{ route('software-instalados.create') }}" class="btn btn-outline-dark float-right"  data-placement="left">
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
                                        
										<th>Tipo Software</th>
										<th>Nombre Software</th>
										<th>Version Software</th>
										<th>Fecha Instalacion</th>
										<th>Serial</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($softwareInstalados as $softwareInstalado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $softwareInstalado->tipo_software }}</td>
											<td>{{ $softwareInstalado->nombre_software }}</td>
											<td>{{ $softwareInstalado->version_software }}</td>
											<td>{{ $softwareInstalado->fecha_instalacion }}</td>
											<td>{{ $softwareInstalado->serial_id }}</td>

                                            <td>
                                                <form action="{{ route('software-instalados.destroy',$softwareInstalado->id) }}" method="POST">
                                                    <a class="btn btn-outline-info" href="{{ route('software-instalados.show',$softwareInstalado->id) }}"><i class="fa fa-fw fa-eye"></i> Listar</a>
                                                    <a class="btn btn-outline-primary" href="{{ route('software-instalados.edit',$softwareInstalado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $softwareInstalados->links() !!}
            </div>
        </div>
    </div>
@endsection
