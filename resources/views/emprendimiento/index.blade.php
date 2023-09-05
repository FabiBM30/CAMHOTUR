@extends('layouts.app')

@section('template_title')
    Emprendimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Emprendimiento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('emprendimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                        <form method="GET" action="{{ route('emprendimiento.index') }}">
                            @csrf
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                    Filtro
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('emprendimiento.index', ['filtro' => 'Matambu']) }}">Matambu</a></li>
                                    <li><a class="dropdown-item" href="{{ route('emprendimiento.index', ['filtro' => 'Puerto Carrillo']) }}">Puerto Carrillo</a></li>
                                    <li><a class="dropdown-item" href="{{ route('emprendimiento.index', ['filtro' => 'Monte Romo']) }}">Monte Romo</a></li>
                                    <li><a class="dropdown-item" href="{{ route('emprendimiento.index', ['filtro' => 'Huacas']) }}">Huacas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('emprendimiento.index', ['filtro' => 'Hojancha']) }}">Hojancha</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ route('emprendimiento.index', ['filtro' => 'Something else here']) }}">Something else here</a></li>
                                </ul>
                            </div>
                        </form>
                        @if(isset($filtro))
                        <p>Filtro aplicado: {{ $filtro }}</p>
                    @endif
                    

<!-- Tu tabla y contenido aquí -->

                        <div class="table-responsive">

                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idemprendimiento</th>
										<th>Nombreemprendimiento</th>
										<th>Descripcionemprendimiento</th>
                                        <th>NombreDistrito</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emprendimientos as $emprendimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $emprendimiento->idEmprendimiento }}</td>
											<td>{{ $emprendimiento->nombreEmprendimiento }}</td>
											<td>{{ $emprendimiento->descripcionEmprendimiento }}</td>
                                            <td>{{ $emprendimiento->distrito->nombreDistrito }}</td>

                                            <td>
                                                <form action="{{ route('emprendimientos.destroy',$emprendimiento->idEmprendimiento) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('emprendimientos.show',$emprendimiento->idEmprendimiento) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('emprendimientos.edit',$emprendimiento->idEmprendimiento) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $emprendimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
