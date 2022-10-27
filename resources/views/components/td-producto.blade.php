<tr class="text-center">
    <th scope="row">{{$producto->id}}</th>
    <td>{{$producto->name}}</td>
    <td>{{$producto->description}}</td>
    <td>{{$producto->price}}</td>
    <td>{{$producto->image}}</td>
    <td class="d-flex justify-content-evenly">
        <button class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#editarModal">Editar
        </button>
        <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
    </td>
</tr>
<!-- Starts Editar Modal      -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre"
                               value="{{$producto->name}}">
                        <label for="description">Descripcion</label>
                        <textarea class="form-control" name="description" id="description"
                                  rows="3">{{$producto->description}}</textarea>
                        <label for="price">Precio</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Precio"
                               value="{{$producto->price}}">
                        <label for="image">Imagen</label>
                        <input type="text" name="image" id="image" class="form-control" placeholder="Imagen"
                               value="{{$producto->image}}">
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
<!--  Ends Editar Modal      -->
