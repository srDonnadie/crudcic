@extends('layouts.app')

@section('template_title')
    Accesorio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro de los accesorios') }}
                            </span>

                                <nav class="navbar navbar-light float-right">
                                    <form class="form-inline" action="{{route('accesorios.index')}}" method="get">
                                         <input value="{{$consulta}}" name="consulta" class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search" >
                                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                     </form>
                                     <form action="">
                                     <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Limpiar</button></form>
                                </nav>

                             <div class="float-right">
                                <a href="{{ route('accesorios.create') }}" class="btn btn-outline-dark float-right"  data-placement="left">
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
                                        
										<th>Accesorios Computo</th>
										<th>Cables Extras</th>
										<th>Extras</th>
										<th>Serial</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accesorios as $accesorio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $accesorio->accesorios_computo }}</td>
											<td>{{ $accesorio->cables_extras }}</td>
											<td>{{ $accesorio->extras }}</td>
											<td>{{ $accesorio->serial_id }}</td>

                                            <td>
                                                <form action="{{ route('accesorios.destroy',$accesorio->id) }}" method="POST">
                                                    <a class="btn btn-outline-info" href="{{ route('accesorios.show',$accesorio->id) }}"><i class="fa fa-fw fa-eye"></i> Listar</a>
                                                    <a class="btn btn-outline-primary" href="{{ route('accesorios.edit',$accesorio->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $accesorios->links() !!}
            </div>
        </div>
    </div>
@endsection
