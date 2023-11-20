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
                                        <th>Acciones</th>
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
                                           <form action="{{ route('catalogos.destroy', $catalogo->idCatalogos) }}" method="POST">
                                            <a class="btn btn-sm btn-warning" href="#" onclick="confirmUpdate({{ $catalogo->idCatalogos }})">
                                                <i class="fa fa-fw fa-edit"></i> {{ __('Actualizar') }}
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="deleteCatalogo({{ $catalogo->idCatalogos }})">
                                                <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </div>
                @endsection
                
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script>
                    function deleteCatalogo(catalogoId) {
                        const route = "{{ route('catalogos.destroy', ':catalogoId') }}".replace(':catalogoId', catalogoId);
                
                        Swal.fire({
                            title: '¿Estás seguro de eliminar este catálogo?',
                            text: '¡No podrás deshacer esta acción!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Sí, eliminar',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            if (result.isConfirmed) {
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
                                        // Recarga la página
                                        window.location.reload();
                                    } else {
                                        // Maneja el error de eliminación aquí
                                        Swal.fire({
                                            title: 'Error',
                                            text: 'No se pudo eliminar este catálogo.',
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
    function confirmUpdate(catalogoId) {
        Swal.fire({
            title: '¿Quieres actualizar este catálogo?',
            text: '¿Vas a actualizar este catálogo, quieres continuar?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Sí, actualizar.',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('catalogos.edit', ':catalogoId') }}".replace(':catalogoId', catalogoId);
            }
        });
    }

</script>