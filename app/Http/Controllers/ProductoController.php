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

    public function shop()
    {
        $products = Producto::all();
        //dd($products);
        return view('CarritoV.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
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
        return view('ProductosV.producto', compact('producto'));
    }

    // Store a product
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->description = $request->description;
        $producto->image = $request->image;
        $producto->save();
        return redirect()->route('producto.index2')->with('success', 'Producto creado con éxito');
    }

    // Update a product
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->description = $request->description;
        $producto->image = $request->image;
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

