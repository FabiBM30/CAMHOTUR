<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabla = document.querySelector("table");
        const tbody = tabla.querySelector("tbody");
        const botonesOrdenar = document.querySelectorAll(".ordenar-precio");

        botonesOrdenar.forEach((boton) => {
            boton.addEventListener("click", function () {
                const filas = Array.from(tbody.querySelectorAll("tr"));

                filas.sort((a, b) => {
                    const precioA = parseFloat(a.querySelector("td:nth-child(3)").textContent.trim().replace("₡", "").replace(/\./g, "").replace(',', '.'));
                    const precioB = parseFloat(b.querySelector("td:nth-child(3)").textContent.trim().replace("₡", "").replace(/\./g, "").replace(',', '.'));
                    
                    if (boton.id === "ordenarPorPrecioAsc") {
                        return precioA - precioB; // De menor a mayor
                    } else {
                        return precioB - precioA; // De mayor a menor
                    }
                });

                filas.forEach((fila) => tbody.appendChild(fila));
            });
        });
    });
</script>
<style>
     #{}
  .btn btn-primary ordenar-precio{
  width:10000px;
  }
</style>

@extends('layouts.app')

@section('template_title')
    Catálogos por Emprendimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
         
                            {{ __('Productos de   ') }}{{ $emprendimiento->nombreEmprendimiento }}
                            </span>
                            <div class="float-right">
                                <!-- Puedes agregar un botón aquí si es necesario -->
                                <button id="ordenarPorPrecioAsc" class="btn btn-primary ordenar-precio">Ordenar por precio (Menor a Mayor)</button>
                                <button id="ordenarPorPrecioDesc" class="btn btn-primary ordenar-precio">Ordenar por precio (Mayor a Menor)</button>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N#</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Estado</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($catalogos as $catalogo)
                         @if ($catalogo->estado === 'activo')
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $catalogo->nombreCatalogos }}</td>
            <td>₡{{ number_format($catalogo->cantidad, 2, ',', '.') }} </td>
            <td>{{ $catalogo->estado }}</td>
            <td>
                <img src="{{ asset('storage/image/'.$catalogo->foto) }}" width="150" alt="" title="" />
            </td>
            <td>
                <!-- Agrega aquí los botones que necesites -->
            </td>
        </tr>
    @endif
@endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-0">
    <div class="col-md-0 offset-md-0">
        <a class="btn btn-danger" href="{{ url('/') }}">Atrás</a>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



