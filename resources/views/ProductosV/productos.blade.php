@extends('layouts.layoutbase')
@section('title', 'Productos Alo')

@section('content')
    <div class="container mb-3">
        @if(count($productos) > 0)
            @foreach($productos as $producto)
                <x-producto :producto="$producto"/>
            @endforeach
        @else
            <p>No hay productos</p>
        @endif
    </div>
@endsection
