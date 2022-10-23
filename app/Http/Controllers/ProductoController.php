<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // Get all products
    public function index()
    {
        $productos = Producto::all();
        return view('ProductosV.productos', compact('productos'));
    }

    // Get all products 2
    public function index2()
    {
        $productos = Producto::all();
        return view('ProductosV.list_productos', compact('productos'));
    }

    // Get a product and edit a product
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('ProductosV.editar_producto', compact('producto'));
    }

    // Store a product
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->imagen = $request->imagen;
        $producto->save();
        return redirect()->route('producto.index2')->with('success', 'Producto creado con éxito');
    }

    // Update a product
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->imagen = $request->imagen;
        $producto->save();
        return redirect()->route('producto.index2')->with('success', 'Producto actualizado');
    }

    // Delete a product
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto.index2')->with('success', 'Producto eliminado correctamente');
    }
}

