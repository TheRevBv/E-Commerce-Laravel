@extends('layouts.layoutbase')
@section('title', 'Productos Alo')

@section('content')

    <div class="container mb-3">
<!--        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Producto
        </button>-->
        <a href="{{route('producto.create')}}" class="btn btn-outline-success">Agregar Producto</a>
    </div>

    @foreach($productos as $producto)
        <x-producto :producto="$producto"/>
    @endforeach
@endsection
