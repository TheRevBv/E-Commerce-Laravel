@extends('layouts.app')
@section('title', 'Productos Alo')

@section('content')
    <div class="container mt-5 mb-3">
        <button type="button" class="btn btn-outline-primary d-flex " data-bs-toggle="modal"
                data-bs-target="#agregarModal">
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
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre"
                                       aria-describedby="helpId">
                                <label for="description">Descripcion</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                <label for="price">Precio</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Precio"
                                       aria-describedby="helpId">
                                <label for="image">Imagen</label>
                                <input type="text" name="image" id="image" class="form-control" placeholder="Imagen"
                                       aria-describedby="helpId">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Ends Agregar Modal        -->
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table caption-top">
                <caption>Lista de productos</caption>
                <thead class="table-dark text-center">
                <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Url Imagen</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @if(count($productos) > 0)
                    @foreach($productos as $producto)
                        <x-td-producto :producto="$producto"/>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No hay productos</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        @if(count($productos) > 0)
            <div class="d-flex justify-content-center">
                @foreach($productos as $producto)
                    <!-- Starts Editar Modal      -->
                    <div class="modal fade" id="editarModal{{$producto->id}}" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="container mb-3">
                            <form method="POST" action="{{route('producto.update', $producto->id)}}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Cerrar"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                   placeholder="Nombre"
                                                   value="{{$producto->name}}">
                                            <label for="description">Descripcion</label>
                                            <textarea class="form-control" name="description" id="description"
                                                      rows="3">{{$producto->description}}</textarea>
                                            <label for="price">Precio</label>
                                            <input type="number" name="price" id="price" class="form-control"
                                                   placeholder="Precio"
                                                   value="{{$producto->price}}">
                                            <label for="image">Imagen</label>
                                            <input type="text" name="image" id="image" class="form-control"
                                                   placeholder="Imagen"
                                                   value="{{$producto->image}}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--  Ends Editar Modal      -->
                @endforeach
            </div>
        @endif
    </div>
@endsection
