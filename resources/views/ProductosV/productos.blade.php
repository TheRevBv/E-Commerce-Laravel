@extends('layouts.layoutbase')
@section('title', 'Productos Alo')

{{$productos}}
@foreach($productos as $producto)
    <x-producto :producto="$producto"/>
@endforeach
