@extends('layouts.app')

@section('template_title')
    Catalogo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Catálogo General de Productos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('catalogos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Producto') }}
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
                                        <th>N#</th>
                                        
										 {{-- <th>Idcatalogos</th>  --}}
										<th>Producto</th>
										<th>Emprendimiento</th>
										<th>Precio</th>
										<th>Estado</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogos as $catalogo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											{{-- <td>{{ $catalogo->idCatalogos }}</td> --}}
											<td>{{ $catalogo->nombreCatalogos }}</td>
											<td>{{ $catalogo->emprendimiento->nombreEmprendimiento }}</td>
                                            <td>₡{{ number_format($catalogo->cantidad, 2, ',', '.') }} </td>
											<td>{{ $catalogo->estado }}</td>
											
                                            <td>
                                            <img src="{{ asset('storage/image/'.$catalogo->foto) }}" width="150" alt="" title="" />
                                           </td>
                                            <td>
                                                <form action="{{ route('catalogos.destroy',$catalogo->idCatalogos) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('catalogos.show',$catalogo->idCatalogos) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                    <a class="btn btn-sm btn-warning" href="{{ route('catalogos.edit',$catalogo->idCatalogos) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Actualizar') }}</a>
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
                {!! $catalogos->links() !!}
            </div>
        </div>
    </div>
@endsection
