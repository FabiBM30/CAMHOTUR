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
                                  {{ __('Agregar Emprendimiento') }}
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
                                                <div class="search-container">
                                                    <input type="text" id="nombreDistritoInput" placeholder="Buscar distrito...">
                                                    <p id="noResultsMessage" style="display: none;">Solo distritos de Hojancha</p>
                                                </div>
                                                <table class="table table-striped table-hover">
                                                    <thead class="thead">
                                                        <tr>
                                        
                                        <th>N#</th>
                                        
										{{-- <th>Idemprendimiento</th> --}}
										<th>Nombre</th>
										<th>Descripción</th>
                                        <th>Tipo de Emprendimiento</th>
                                        <th>Distrito</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emprendimientos as $emprendimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											{{-- <td>{{ $emprendimiento->idEmprendimiento }}</td> --}}
											<td>{{ $emprendimiento->nombreEmprendimiento }}</td>
											<td>{{ $emprendimiento->descripcionEmprendimiento }}</td>
                                            <td>{{ $emprendimiento->tipo_emprendimiento }}</td>
                                            <td>{{ $emprendimiento->distrito->nombreDistrito }}</td>

                                            <td>
                                                <form action="{{ route('emprendimientos.destroy',$emprendimiento->idEmprendimiento) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('emprendimientos.show',$emprendimiento->idEmprendimiento) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>            --}}
                                                <a class="btn btn-sm btn-warning" href="#" onclick="confirmUpdate({{ $emprendimiento->idEmprendimiento }})">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Actualizar') }}
                                                </a>
                                                
                                                @csrf
                                                @method('DELETE')
                                     <button type="button" class="btn btn-danger btn-sm" onclick="deleteEmprendimiento({{ $emprendimiento->idEmprendimiento }})">
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
                {!! $emprendimientos->links() !!}
            </div>
        </div>
    </div>
    <script>
      const searchInput = document.getElementById('nombreDistritoInput');
const tableRows = document.querySelectorAll('tbody tr');

const searchEmployees = () => {
    const searchTerm = searchInput.value.toLowerCase();

    if (searchTerm.trim() === '') {
        // Si el campo de búsqueda está vacío, muestra todos los resultados
        tableRows.forEach((row) => {
            row.style.display = 'table-row';
        });
        hideNoResultsMessage();
        return;
    }

    
    
    
    


    
    
    
    tableRows.forEach((row) => {
        const nombreDistritoCell = row.querySelector('td:nth-child(5)'); // Suponiendo que el campo NombreDistrito es la quinta columna (índice 4)
        if (nombreDistritoCell) {
            const nombreDistrito = nombreDistritoCell.innerText.toLowerCase();
            if (nombreDistrito.includes(searchTerm)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        }
    });









    // Mostrar un mensaje si no se encontraron resultados
    const resultsFound = Array.from(tableRows).some((row) => row.style.display === 'table-row');
    if (resultsFound) {
        hideNoResultsMessage();
    } else {
        showNoResultsMessage("Solo distritos de Hojancha");
    }
};

const hideNoResultsMessage = () => {
    const noResultsMessage = document.getElementById('noResultsMessage');
    noResultsMessage.style.display = 'none';
};

const showNoResultsMessage = (message) => {
    const noResultsMessage = document.getElementById('noResultsMessage');
    noResultsMessage.innerText = message;
    noResultsMessage.style.display = 'block';
};

searchInput.addEventListener('input', searchEmployees);
    </script>


@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function deleteEmprendimiento(emprendimientoId) {
        const route = "{{ route('emprendimientos.destroy', ':emprendimientoId') }}".replace(':emprendimientoId', emprendimientoId);
        
        Swal.fire({
            title: '¿Estás seguro de eliminar este emprendimiento?',
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
                            text: 'No se pudo eliminar el registro.',
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
        function confirmUpdate(emprendimientoId) {
            Swal.fire({
                title: '¿Quieres actualizar este emprendimiento?',
                text: 'Estás a punto de actualizar este emprendimiento ¿Quieres continuar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Sí, actualizar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('emprendimientos.edit', ':emprendimientoId') }}".replace(':emprendimientoId', emprendimientoId);
                }
            });
        }
        </script>
        

