@extends('layouts.app')

@section('template_title')
    Distrito
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Distrito') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('distritos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Distrito') }}
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
										<th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($distritos as $distrito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $distrito->nombreDistrito }}</td>
											<td>{{ $distrito->descripcionDistrito }}</td>
                                            <td>
                                            <img src="{{ asset('storage/images/'.$distrito->imagenDistrito) }}" width="150" alt="" title="" />
                                           </td>
                                            <td>
                                                <form action="{{ route('distritos.destroy',$distrito->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('distritos.show',$distrito->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a> --}}
                                                    <a class="btn btn-sm btn-warning" href="#" onclick="confirmUpdate({{ $distrito->id }})">
                                                        <i class="fa fa-fw fa-edit"></i> {{ __('Actualizar') }}
                                                    </a>
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                         <button type="button" class="btn btn-danger btn-sm" onclick="deleteDistrito({{ $distrito->id }})">
                                           <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $distritos->links() !!}
            </div>
        </div>
       
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function deleteDistrito(distritoId) {
        const route = "{{ route('distritos.destroy', ':distritoId') }}".replace(':distritoId', distritoId);
        
        Swal.fire({
            title: '¿Estás seguro de eliminar este distrito?',
            text: '¡No podrás deshacer esta acción!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma la eliminación, envía el formulario de eliminación
                fetch(route, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ _method: 'DELETE' })
                })
                .then(response => {
                    if (response.ok) {
                        // Recarga la página o realiza alguna otra acción si la eliminación fue exitosa
                        location.reload(); // Puedes recargar la página como ejemplo
                    } else {
                        // Maneja el error de eliminación aquí
                        Swal.fire({
                            title: 'Error',
                            text: 'No se pudo eliminar este distrito ya que tiene emprendimientos asignados.',
                            icon: 'error',
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Error',
                        text: 'Ocurrió un error inesperado.',
                        icon: 'error',
                    });
                });
            }
        });
    }
    </script>
    
    
    <script>
        function confirmUpdate(distritoId) {
            Swal.fire({
                title: '¿Quieres actualizar este distrito?',
                text: '¿Vas a actualizar este distrito, quieres continuar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Sí, actualizar.',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('distritos.edit', ':distritoId') }}".replace(':distritoId', distritoId);
                }
            });
        }
        </script>
        
    
