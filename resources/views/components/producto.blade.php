<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="card" style="width: 18rem;">
        <img src="{{ $producto->imagen }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text">{{ $producto->descripcion }}</p>
            <form method="post" action="{{route('product.destroy',$producto->id)}}">
                @method('delete')
                    @csrf
                <a href="{{ route('producto.show', ['id' => $producto['id']]) }}" class="btn btn-primary">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
