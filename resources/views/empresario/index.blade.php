@extends('layouts.app')

@section('template_title')
    Empresario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empresario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empresarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idempresario</th>
										<th>Nombreempresario</th>
										<th>Apellidoempresario</th>
										<th>Generoempresario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresarios as $empresario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empresario->idEmpresario }}</td>
											<td>{{ $empresario->nombreEmpresario }}</td>
											<td>{{ $empresario->apellidoEmpresario }}</td>
											<td>{{ $empresario->generoEmpresario }}</td>

                                            <td>
                                                <form action="{{ route('empresarios.destroy',$empresario->idEmpresario) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empresarios.show',$empresario->idEmpresario) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresarios.edit',$empresario->idEmpresario) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $empresarios->links() !!}
            </div>
        </div>
    </div>
@endsection
