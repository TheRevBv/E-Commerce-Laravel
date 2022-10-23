@extends('layouts.layoutbase')
@section('title', 'Detalle Producto')

@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <form method="POST" action="/producto/{{ $producto->id }}" class="w-50 text-center">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" tabindex="1" class="form-control" id="nombre" placeholder="Nombre producto"
                       value="{{ $producto->nombre }}">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" tabindex="2" id="descripcion" rows="3">{{ $producto->descripcion }}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Imagen URL</label>
                <input type="text" class="form-control" name="imagen" tabindex="3" id="imagen" placeholder="Url imagen"
                       value="{{ $producto->imagen }}">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" tabindex="4" id="precio" placeholder="Precio"
                       value="{{ $producto->precio }}">
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <input type="submit" tabindex="5" class="btn btn-outline-primary w-50 mx-3" value="Guardar">
                <a href="{{route('producto.index')}}" class="btn btn-outline-warning w-50">Volver</a>
            </div>
        </form>
    </div>
@endsection
