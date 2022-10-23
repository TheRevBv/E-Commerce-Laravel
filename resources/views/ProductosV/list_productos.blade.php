@extends('layouts.layoutbase')
@section('title', 'Productos Alo')

@section('content')
    <div class="container mb-3">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#agregarModal">
            Agregar Producto
        </button>
        <!-- Starts Agregar Modal       -->
        <div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="container mb-3">
                <form method="POST" action="{{route('producto.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre"
                                       aria-describedby="helpId">
                                <label for="descripcion">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" id="precio" class="form-control" placeholder="Precio"
                                       aria-describedby="helpId">
                                <label for="imagen">Imagen</label>
                                <input type="text" name="imagen" id="imagen" class="form-control" placeholder="Imagen"
                                       aria-describedby="helpId">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Ends Agregar Modal        -->
    </div>
    <div class="table-responsive">
        <table class="table caption-top">
            <caption>Lista de productos</caption>
            <thead class="table-dark text-center">
            <tr>
                <th scope="col"># ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Url Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <x-td-producto :producto="$producto"/>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
