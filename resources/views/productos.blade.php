{{$productos}}
@foreach($productos as $producto)
    <li>{{$producto->titulo}}</li>
    <li>{{$producto->descripcion}}</li>
    <li>${{$producto->precio}}</li>
    <x-producto :producto="$producto"/>
@endforeach
