@extends('layouts.app')

@section('template_title')
    Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">   
            <div class="col-sm-12">            
                <div class="card">               
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Registro de los usuarios') }}
                            </span>
                    
                                <nav class="navbar navbar-light float-right">
                                    <form class="form-inline" action="{{route('usuarios.index')}}" method="get">
                                         <input value="{{$texto}}" name="texto" class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search" >
                                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                     </form>
                                     <form action="">
                                     <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Limpiar</button></form>
                                </nav>
                      

                             <div class="float-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-outline-dark float-right"  data-placement="left"><i class="fa fa-user-plus" aria-hidden="true"></i>
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
                                        
										<th>C.C</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Correo</th>
										<th>Cargo</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuario->cc }}</td>
											<td>{{ $usuario->primer_nombre }}</td>
											<td>{{ $usuario->segundo_nombre }}</td>
											<td>{{ $usuario->apellido_paterno }}</td>
											<td>{{ $usuario->apellido_materno }}</td>
											<td>{{ $usuario->correo }}</td>
											<td>{{ $usuario->cargo }}</td>

                                            <td>
                                                <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                                                    <a class="btn btn-outline-info" href="{{ route('usuarios.show',$usuario->id) }}"></i> Listar</a></br>
                                                    <a class="btn btn-outline-primary" href="{{ route('usuarios.edit',$usuario->id) }}"> Editar</a></br>
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
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
