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

    // Get a product
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('ProductosV.producto', compact('producto'));
    }

    // Create a product
    public function create()
    {
        return view('crear_producto');
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
        return redirect()->route('producto.index');
    }

    // Edit a product
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('editar_producto', compact('producto'));
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
        return redirect()->route('producto.index')->with('success', 'Producto actualizado');
    }

    // Delete a product
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'Producto eliminado correctamente');
    }
}

