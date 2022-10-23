<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="card" style="width: 18rem;">
        <img src="{{ $producto->imagen }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text">{{ $producto->descripcion }}</p>
<!--            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#editarModal">Editar
                </button>
                <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
            </div>-->
        </div>
        <!-- Starts Editar Modal      -->
<!--        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="container mb-3">
                <form method="POST" action="{{route('producto.update', ['id' => $producto['id']])}}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre"
                                       value="{{$producto->nombre}}">
                                <label for="descripcion">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="descripcion"
                                          rows="3">{{$producto->descripcion}}</textarea>
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" id="precio" class="form-control" placeholder="Precio"
                                       value="{{$producto->precio}}">
                                <label for="imagen">Imagen</label>
                                <input type="text" name="imagen" id="imagen" class="form-control" placeholder="Imagen"
                                       value="{{$producto->imagen}}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>-->
        <!--  Ends Editar Modal      -->

    </div>
