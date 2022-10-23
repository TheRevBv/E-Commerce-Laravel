@extends('layouts.layoutbase')
@section('title', 'Productos Alo')

@section('content')
    <div class="container mb-3">
        @foreach($productos as $producto)
            <x-producto :producto="$producto"/>
        @endforeach
    </div>
@endsection
