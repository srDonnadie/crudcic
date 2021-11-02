@extends('layouts.app')

@section('template_title')
    Equipo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro de los equipos') }}
                            </span>

                            <nav class="navbar navbar-light float-right">
                                    <form class="form-inline" action="{{route('equipos.index')}}" method="get">
                                         <input value="{{$texto}}" name="texto" class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search" >
                                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                     </form>
                                     <form action="">
                                     <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Limpiar</button></form>
                                </nav>

                             <div class="float-right">
                                <a href="{{ route('equipos.create') }}" class="btn btn-outline-dark float-right"  data-placement="left"><i class="fa fa-desktop" aria-hidden="true"></i>
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
                                        
										<th>Serial</th>
										<th>Marca</th>
										<th>Tipo Equipo</th>
										<th>Codigo Interno</th>
										<th>Referencia</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipos as $equipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $equipo->serial }}</td>
											<td>{{ $equipo->marca }}</td>
											<td>{{ $equipo->tipo_equipo }}</td>
											<td>{{ $equipo->codigo_interno }}</td>
											<td>{{ $equipo->referencia }}</td>

                                            <td>
                                                <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
                                                    <a class="btn btn-outline-info" href="{{ route('equipos.show',$equipo->id) }}"> Listar</a>
                                                    <a class="btn btn-outline-primary" href="{{ route('equipos.edit',$equipo->id) }}"> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $equipos->links() !!}
            </div>
        </div>
    </div>
@endsection
