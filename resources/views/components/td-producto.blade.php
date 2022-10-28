<tr class="text-center">
    <th scope="row">{{$producto->id}}</th>
    <td>{{$producto->name}}</td>
    <td>{{$producto->description}}</td>
    <td>{{$producto->price}}</td>
    <td>{{$producto->image}}</td>
    <td class="d-flex justify-content-evenly">
        <button class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#editarModal{{$producto->id}}">Editar
        </button>
        <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
    </td>
</tr>
