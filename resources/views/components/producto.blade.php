<div>
    <div class="card" style="width: 18rem;">
        <img src="{{ $producto->imagen }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text">{{ $producto->descripcion }}</p>
            <p class="card-text">{{ $producto->precio }}</p>
            <form action="{{ route('carrito.store') }}" method="POST">
                @csrf
                <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <input type="number" name="cantidad">
                <button type="submit" class="btn btn-primary">Agregar al carrito</button>
            </form>
        </div>
    </div>
</div>
